<?php

declare(strict_types=1);

namespace App\BoundedContexts\SpikeCountEvents\Repository;

use App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IAppEvent;
use App\BoundedContexts\Infrastructure\Events\AppEvent\Factory\AppEventFactory;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\AppEventsPrimaryTrait;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\EventCountsTrait;
use App\BoundedContexts\Infrastructure\ReportException\ApplicationServices\RecordExceptionReport;
use App\Model\Entity\EventCount;
use Cake\I18n\FrozenTime;
use Exception;
use JsonException;

final class RCountEvents
{
    use AppEventsPrimaryTrait;
    use EventCountsTrait;

    public function __construct()
    {
        $this->loadModels();
    }

    private function loadModels(): void
    {
        $this->loadLocalAppEventsTable();
        $this->loadEventCountsTable();
    }

    public function collectCount(): int
    {
        return $this->localAppEventsTable->find()->count();
    }

    public function storeCount(int $count): void
    {
        $connection = $this->eventCountsTable->getConnection();
        $data = [
            EventCount::FIELD_WHEN_COUNTED => FrozenTime::now(),
            EventCount::FIELD_EVENT_COUNT => $count,
        ];
        $entity = $this->eventCountsTable->newEntity($data);
        try {
            $appEvent = $this->appEvent();
            $connection->transactional(function ($conn) use ($entity, $appEvent) {
                $this->eventCountsTable->saveOrFail($entity);
                $appEvent->save($conn);
            });
            $appEvent->notify();
        } catch (JsonException|Exception $e) {
            $message = $e->getMessage();
            $detail = [
                'trace' => $e->getTraceAsString(),
                'entity' => $entity->toArray(),
                'entity errors' => $entity->getErrors(),
            ];
            RecordExceptionReport::capture($message, $detail);
            RecordExceptionReport::flush();
        }
    }

    /**
     * @throws \JsonException
     */
    private function appEvent(): IAppEvent
    {
        return AppEventFactory::dbStateChangeAppEvent('Spike for event count');
    }
}

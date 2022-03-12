<?php

declare(strict_types=1);

namespace App\BoundedContexts\SpikeCountEvents\Repository;

use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\AppEventsPrimaryTrait;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\EventCountsTrait;
use App\Model\Entity\EventCount;
use Cake\I18n\FrozenTime;

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
        $data = [
            EventCount::FIELD_WHEN_COUNTED => FrozenTime::now(),
            EventCount::FIELD_EVENT_COUNT => $count,
        ];
        $entity = $this->eventCountsTable->newEntity($data);
        $this->eventCountsTable->saveOrFail($entity);
    }
}

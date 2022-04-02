<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\SpikeCountEvents\Repository;

use Doctrine\DBAL\DBALException;
use Exception;
use JsonException;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IAppEvent;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\Factory\AppEventFactory;
use LegacyBoundedContexts\Infrastructure\ReportException\ApplicationServices\RecordExceptionReport;
use Models\Common\BaseModel;

use function is_array;

final class RCountEvents extends BaseModel
{
    public function collectCount(): int
    {
        $sql = 'select count(*) row_count
from local_app_events
limit 1';
        try {
            $statement = $this->sql->executeQuery($sql, []);
            $rows = $statement->fetchAll();
        } catch (DBALException $e) {
            return 0;
        }
        if (is_array($rows) && (1 === count($rows))) {
            return $rows[0]['row_count'];
        }
        return 0;
    }

    public function storeCount(int $count): void
    {
        $sql = 'insert into event_counts
    (when_counted, event_count, created, modified)
VALUES (now(), ?, now(), now())';
        $parms = [$count];
        try {
            $connection = $this->db->getConnection();
            $appEvent = $this->appEvent();

            $connection->transactional(function ($conn) use ($sql, $parms, $appEvent) {
                $conn->executeUpdate($sql, $parms);
                $appEvent->save($conn);
            });
        } catch (JsonException|DBALException|Exception $e) {
            $detail = [
                'message'=> $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'count' => $count,
            ];

            RecordExceptionReport::capture('Legacy store count failed', $detail);
            RecordExceptionReport::flush();
        }
    }

    /**
     * @throws \JsonException
     */
    private function appEvent(): IAppEvent
    {
        return AppEventFactory::dbStateChangeAppEvent(
            'Spike for legacy event count'
        );
    }
}

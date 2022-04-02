<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\SpikeCountEvents\Repository;

use Doctrine\DBAL\DBALException;
use Models\Common\BaseModel;

use function is_array;

use const PHP_EOL;

/**
 * Non-production code, intentionally exposes SQL
 */
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
            $this->sql->executeUpdate($sql, $parms);
        } catch (DBALException $e) {
            echo 'Query failed: ' .
                $e->getMessage() . PHP_EOL .
                $sql . PHP_EOL;
        }
    }
}

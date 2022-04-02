<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\AppEvent\Repository;

use Exception;
use InvalidArgumentException;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IRAppEvent;
use Models\Common\BaseModel;

final class RAppEventDefault extends BaseModel implements IRAppEvent
{
    /** @var ?array */
    private $readback;

    public function save(string $insert, string $read, array $parms): array
    {
        $connection = $this->db->getConnection();
        try {
            $connection->transactional(function ($connection) use ($insert, $read, $parms) {
                $connection->executeUpdate($insert, $parms);
                $id = (int)$connection->lastInsertId();
                $statement = $connection->executeQuery($read, [$id]);
                $rows = $statement->fetchAll();
                if (empty($rows)) {
                    throw new InvalidArgumentException('Event readback failed');
                }
                $this->readback = $rows[0];
            });
        } catch (Exception $e) {
            return [];
        }
        return $this->readback;
    }
}

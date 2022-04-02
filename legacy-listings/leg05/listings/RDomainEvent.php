<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\DomainEvent\Repository;

use Doctrine\DBAL\DBALException;
use Models\Common\BaseModel;

final class RDomainEvent extends BaseModel
{
    public function saveDomainEvent(string $sourceTable, array $localEvent): void
    {
        $sql = 'insert into domain_events
(id_of_source, source_table, action, subsystem, description,
 detail, event_uuid, when_occurred, created, modified)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
        $parms = [
            $localEvent['id'],
            $sourceTable,
            $localEvent['action'],
            $localEvent['subsystem'],
            $localEvent['description'],
            $localEvent['detail'],
            $localEvent['event_uuid'],
            $localEvent['when_occurred'],
            $localEvent['created'],
            $localEvent['modified'],
        ];
        try {
            $this->sql->executeUpdate($sql, $parms);
        } catch (DBALException $e) {
            // Fail silently for now
        }
    }
}

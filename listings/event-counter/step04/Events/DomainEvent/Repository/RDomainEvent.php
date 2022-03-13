<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\DomainEvent\Repository;

use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\GlobalEventsTrait;
use App\Model\Entity\DomainEvent;

final class RDomainEvent
{
    use GlobalEventsTrait;

    public function __construct()
    {
        $this->loadModels();
    }

    private function loadModels(): void
    {
        $this->loadDomainEventsTable();
    }

    public function saveDomainEvent(string $sourceTable, array $localEvent): void
    {
        $localEvent[DomainEvent::FIELD_ID_OF_SOURCE] = $localEvent[DomainEvent::FIELD_ID];
        unset($localEvent[DomainEvent::FIELD_ID]);
        $localEvent[DomainEvent::FIELD_SOURCE_TABLE] = $sourceTable;
        $entity = $this->domainEventsTable->newEntity($localEvent);
        $entity->setDirty(DomainEvent::FIELD_WHEN_OCCURRED, true);
        $entity->setDirty(DomainEvent::FIELD_CREATED, true);
        $entity->setDirty(DomainEvent::FIELD_MODIFIED, true);
        $this->domainEventsTable->saveOrFail($entity);
    }
}

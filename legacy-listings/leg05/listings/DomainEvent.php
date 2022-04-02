<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\DomainEvent\ApplicationServices;

use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\DomainModel\Interfaces\IDomainEvent;
use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\Repository\RDomainEvent;

final class DomainEvent implements IDomainEvent
{
    /** @var RDomainEvent */
    private $repository;

    public function __construct(RDomainEvent $repository)
    {
        $this->repository = $repository;
    }

    public function notifyDomainEvent(string $sourceTable, array $localEvent): void
    {
        $this->repository->saveDomainEvent($sourceTable, $localEvent);
    }
}

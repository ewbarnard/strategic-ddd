<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\DomainEvent\ApplicationServices;

use App\BoundedContexts\Infrastructure\Events\DomainEvent\DomainModel\Interfaces\IDomainEvent;
use App\BoundedContexts\Infrastructure\Events\DomainEvent\Repository\RDomainEvent;

final class DomainEvent implements IDomainEvent
{
    private RDomainEvent $repository;

    public function __construct(RDomainEvent $repository)
    {
        $this->repository = $repository;
    }

    public function notifyDomainEvent(string $sourceTable, array $localEvent): void
    {
        $this->repository->saveDomainEvent($sourceTable, $localEvent);
    }
}

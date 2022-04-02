<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\DomainEvent\Factory;

use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\ApplicationServices\DomainEvent;
use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\DomainModel\Interfaces\IDomainEvent;
use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\Repository\RDomainEvent;

final class DomainEventFactory
{
    private function __construct()
    {
    }

    public static function domainEvent(): IDomainEvent
    {
        $repository = new RDomainEvent();
        return new DomainEvent($repository);
    }
}

<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\DomainEvent\Factory;

use App\BoundedContexts\Infrastructure\Events\DomainEvent\ApplicationServices\DomainEvent;
use App\BoundedContexts\Infrastructure\Events\DomainEvent\DomainModel\Interfaces\IDomainEvent;
use App\BoundedContexts\Infrastructure\Events\DomainEvent\Repository\RDomainEvent;

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

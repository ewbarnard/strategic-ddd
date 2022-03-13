<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\DomainEvent\DomainModel\Interfaces;

interface IDomainEvent
{
    public function notifyDomainEvent(string $sourceTable, array $localEvent): void;
}

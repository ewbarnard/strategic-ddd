<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\DomainModel\Interfaces;

interface IRAppEvent
{
    public function save(string $insert, string $read, array $parms): array;
}

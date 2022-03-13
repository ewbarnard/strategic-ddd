<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces;

use Cake\Database\Connection;

interface IRAppEvent
{
    public function save(string $insert, string $read, array $parms, ?Connection $conn = null): array;
}

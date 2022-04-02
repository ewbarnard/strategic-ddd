<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces;

use Doctrine\DBAL\Connection;

interface IRAppEvent
{
    public function save(
        string $insert,
        string $read,
        array $parms,
        Connection $connection
    ): array;
}

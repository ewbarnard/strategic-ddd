<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces;

use Doctrine\DBAL\Connection;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Constants\CDisableAppEvent;

interface IAppEvent extends CDisableAppEvent
{
    public function __construct(
        IRAppEvent $repository,
        string $action,
        string $description,
        ?array $detail = null
    );

    public function addDetail(array $detail): void;

    public function save(Connection $connection): void;

    public function notify(): void;
}

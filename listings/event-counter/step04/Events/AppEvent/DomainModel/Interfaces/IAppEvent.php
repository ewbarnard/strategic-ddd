<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces;

interface IAppEvent
{
    public function __construct(
        IRAppEvent $repository,
        string $action,
        string $description,
        ?array $detail = null
    );

    public function addDetail(array $detail): void;

    public function save(): void;

    public function notify(): void;
}

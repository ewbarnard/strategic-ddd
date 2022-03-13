<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\Factory;

use App\BoundedContexts\Infrastructure\Events\AppEvent\ApplicationServices\DefaultAppEvent;
use App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Constants\CAppEventOriginatingContexts;
use App\BoundedContexts\Infrastructure\Events\AppEvent\Repository\RAppEventDefault;
use App\BoundedContexts\Infrastructure\Events\DomainModel\Interfaces\IAppEvent;

final class AppEventFactory implements CAppEventOriginatingContexts
{
    private function __construct()
    {
    }

    /**
     * @throws \JsonException
     */
    public static function defaultAppEvent(string $action, string $description, ?array $detail = null): IAppEvent
    {
        $repository = new RAppEventDefault();
        return new DefaultAppEvent($repository, $action, $description, $detail);
    }

    /**
     * @throws \JsonException
     */
    public static function dbStateChangeAppEvent(string $description, ?array $detail = null): IAppEvent
    {
        return self::defaultAppEvent(self::ACTION_DB_STATE_CHANGE, $description, $detail);
    }
}

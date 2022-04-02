<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\ApplicationServices;

final class DefaultAppEvent extends BaseAppEvent
{
    protected static string $insert = 'insert into `local_app_events`
    (action, subsystem, description, detail, event_uuid, when_occurred, created, modified)
    values (?, ?, ?, ?, ?, now(6), now(), now())';
    protected static string $read = 'select * from `local_app_events` where id = ? limit 1';
}

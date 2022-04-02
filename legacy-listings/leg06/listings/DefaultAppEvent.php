<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\AppEvent\ApplicationServices;

final class DefaultAppEvent extends BaseAppEvent
{
    /** @var string */
    protected static $insert = 'insert into `local_app_events`
    (action, subsystem, description, detail, event_uuid, when_occurred, created, modified)
    values (?, ?, ?, ?, ?, now(6), now(), now())';
    /** @var string */
    protected static $read = 'select * from `local_app_events` where id = ? limit 1';
}

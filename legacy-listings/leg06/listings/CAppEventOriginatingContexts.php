<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Constants;

interface CAppEventOriginatingContexts
{
    public const SOURCE_TABLE_PRIMARY = 'local_app_events';
    public const SUBSYSTEM_DEFAULT = 'Default';
    public const SUBSYSTEM_ROLE_BASED_LOOKUP = 'Role-based lookup';
    public const ACTION_DB_STATE_CHANGE = 'db_state_change';
}

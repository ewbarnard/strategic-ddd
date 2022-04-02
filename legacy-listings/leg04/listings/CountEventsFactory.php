<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\SpikeCountEvents\Factory;

use LegacyBoundedContexts\SpikeCountEvents\ApplicationServices\CountEvents;
use LegacyBoundedContexts\SpikeCountEvents\Repository\RCountEvents;

final class CountEventsFactory
{
    private function __construct()
    {
    }

    public static function countEvents(): CountEvents
    {
        $repository = new RCountEvents();
        return new CountEvents($repository);
    }
}

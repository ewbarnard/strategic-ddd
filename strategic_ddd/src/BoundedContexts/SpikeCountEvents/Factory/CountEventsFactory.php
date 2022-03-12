<?php

declare(strict_types=1);

namespace App\BoundedContexts\SpikeCountEvents\Factory;

use App\BoundedContexts\SpikeCountEvents\ApplicationServices\CountEvents;
use App\BoundedContexts\SpikeCountEvents\Repository\RCountEvents;
use JetBrains\PhpStorm\Pure;

final class CountEventsFactory
{
    private function __construct()
    {
    }

    #[Pure]
    public static function countEvents(): CountEvents
    {
        $repository = new RCountEvents();
        return new CountEvents($repository);
    }
}

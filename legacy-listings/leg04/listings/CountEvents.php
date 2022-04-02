<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\SpikeCountEvents\ApplicationServices;

use LegacyBoundedContexts\SpikeCountEvents\Repository\RCountEvents;

final class CountEvents
{
    /** @var RCountEvents */
    private $repository;

    public function __construct(RCountEvents $repository)
    {
        $this->repository = $repository;
    }

    public function insertCurrentCount(): void
    {
        $count = $this->repository->collectCount();
        $this->repository->storeCount($count);
    }
}

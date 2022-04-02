<?php

declare(strict_types=1);

namespace App\BoundedContexts\SpikeCountEvents\ApplicationServices;

use App\BoundedContexts\SpikeCountEvents\Repository\RCountEvents;

final class CountEvents
{
    private RCountEvents $repository;

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

<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events;

use App\Model\Table\EventCountsTable;
use Cake\ORM\Locator\LocatorAwareTrait;

trait EventCountsTrait
{
    use LocatorAwareTrait;

    protected EventCountsTable $eventCountsTable;

    protected function loadEventCountsTable(): void
    {
        $this->eventCountsTable = $this->eventCountsTable();
    }

    protected function eventCountsTable(): EventCountsTable
    {
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        /** @var EventCountsTable $table */
        $table = $this->getTableLocator()->get('EventCounts');
        return $table;
    }
}

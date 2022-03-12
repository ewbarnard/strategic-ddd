<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events;

use App\Model\Table\LocalAppEventsTable;
use Cake\ORM\Locator\LocatorAwareTrait;

trait AppEventsPrimaryTrait
{
    use LocatorAwareTrait;

    protected LocalAppEventsTable $localAppEventsTable;

    protected function loadLocalAppEventsTable(): void
    {
        $this->localAppEventsTable = $this->localAppEventsTable();
    }

    protected function localAppEventsTable(): LocalAppEventsTable
    {
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        /** @var LocalAppEventsTable $table */
        $table = $this->getTableLocator()->get('LocalAppEvents');
        return $table;
    }
}

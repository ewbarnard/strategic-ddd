<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events;

use App\Model\Table\DomainEventsTable;
use Cake\ORM\Locator\LocatorAwareTrait;

trait GlobalEventsTrait
{
    use LocatorAwareTrait;

    protected DomainEventsTable $domainEventsTable;

    protected function loadDomainEventsTable(): void
    {
        $this->domainEventsTable = $this->domainEventsTable();
    }

    protected function domainEventsTable(): DomainEventsTable
    {
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        /** @var DomainEventsTable $table */
        $table = $this->getTableLocator()->get('DomainEvents');
        return $table;
    }
}

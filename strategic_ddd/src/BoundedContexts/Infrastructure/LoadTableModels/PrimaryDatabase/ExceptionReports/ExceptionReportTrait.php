<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\ExceptionReports;

use App\Model\Table\ExceptionReportsTable;
use Cake\ORM\Locator\LocatorAwareTrait;

trait ExceptionReportTrait
{
    use LocatorAwareTrait;

    protected ExceptionReportsTable $exceptionReportsTable;

    protected function loadExceptionReportsTable(): void
    {
        $this->exceptionReportsTable = $this->exceptionReportsTable();
    }

    protected function exceptionReportsTable(): ExceptionReportsTable
    {
        /** @noinspection PhpUnnecessaryLocalVariableInspection */
        /** @var ExceptionReportsTable $table */
        $table = $this->getTableLocator()->get('ExceptionReports');
        return $table;
    }
}

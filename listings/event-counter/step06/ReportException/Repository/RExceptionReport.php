<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\ReportException\Repository;

use App\BoundedContexts\Infrastructure\ReportException\DomainModel\DataTransfer\ExceptionReportEntity;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\ExceptionReports\ExceptionReportTrait;
use Exception;

final class RExceptionReport
{
    use ExceptionReportTrait;

    /**
     * @param ExceptionReportEntity[] $captures
     * @return bool
     */
    public function flush(array $captures): bool
    {
        if (empty($captures)) {
            return true;
        }
        $this->loadExceptionReportsTable();
        $connection = $this->exceptionReportsTable->getConnection();

        try {
            $connection->transactional(function () use ($captures) {
                foreach ($captures as $capture) {
                    $data = $capture->data();
                    $entity = $this->exceptionReportsTable->newEntity($data);
                    $this->exceptionReportsTable->saveOrFail($entity);
                }
            });
        } catch (Exception) {
            return false;
        }
        return true;
    }
}

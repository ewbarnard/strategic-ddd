<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\ReportException\ApplicationServices;

use App\BoundedContexts\Infrastructure\ReportException\DomainModel\DataTransfer\ExceptionReportEntity;
use App\BoundedContexts\Infrastructure\ReportException\Repository\RExceptionReport;

final class RecordExceptionReport
{
    private static array $captures = [];

    private function __construct()
    {
    }

    public static function capture(string $description, array $detail = []): void
    {
        self::$captures[] = new ExceptionReportEntity($description, $detail);
    }

    public static function flush(bool $isTest = false): void
    {
        if (!count(self::$captures)) {
            return;
        }
        if ($isTest) {
            self::reset();
        } else {
            $repository = new RExceptionReport();
            if ($repository->flush(self::$captures)) {
                self::reset();
            }
        }
    }

    public static function reset(): void
    {
        self::$captures = [];
    }

    /**
     * Unit test support
     *
     * @return int
     */
    public static function errorCount(): int
    {
        return count(self::$captures);
    }
}

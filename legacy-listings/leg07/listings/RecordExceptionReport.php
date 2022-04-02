<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\ReportException\ApplicationServices;

use LegacyBoundedContexts\Infrastructure\ReportException\DomainModel\DataTransfer\ExceptionReportEntity;
use LegacyBoundedContexts\Infrastructure\ReportException\Repository\RExceptionReport;

final class RecordExceptionReport
{
    /** @var array */
    private static $captures = [];

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

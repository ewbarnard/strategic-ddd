<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\ReportException\DomainModel\DataTransfer;

use JsonException;

use function is_array;
use function json_encode;

final class ExceptionReportEntity
{
    /** @var string */
    private $description;
    /** @var ?array */
    private $detail;

    public function __construct(string $description, ?array $detail = null)
    {
        $this->description = $description;
        $this->detail = $detail;
    }

    /**
     * Create array in correct format for table insert
     *
     * @return array
     */
    public function data(): array
    {
        try {
            $detail = is_array($this->detail) ? json_encode($this->detail, JSON_THROW_ON_ERROR) : null;
        } catch (JsonException $e) {
            $detail = null;
        }
        return [
            $this->description,
            $detail,
        ];
    }
}

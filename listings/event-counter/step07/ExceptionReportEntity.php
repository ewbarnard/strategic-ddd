<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\ReportException\DomainModel\DataTransfer;

use App\Model\Entity\ExceptionReport;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Immutable;

#[Immutable]
final class ExceptionReportEntity
{
    #[Immutable(Immutable::CONSTRUCTOR_WRITE_SCOPE)]
    private string $description;
    #[Immutable(Immutable::CONSTRUCTOR_WRITE_SCOPE)]
    private ?array $detail;

    public function __construct(string $description, ?array $detail = null)
    {
        $this->description = $description;
        $this->detail = $detail;
    }

    /**
     * Create array in correct format for ExceptionReportsTable::newEntity()
     *
     * @return array
     */
    #[ArrayShape([
        ExceptionReport::FIELD_DESCRIPTION => "string",
        ExceptionReport::FIELD_DETAIL => "array|null",
    ])]
    public function data(): array
    {
        return [
            ExceptionReport::FIELD_DESCRIPTION => $this->description,
            ExceptionReport::FIELD_DETAIL => $this->detail,
        ];
    }
}

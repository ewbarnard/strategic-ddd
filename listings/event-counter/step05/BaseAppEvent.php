<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\ApplicationServices;

use App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Constants\CAppEventOriginatingContexts;
use App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IAppEvent;
use App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IRAppEvent;
use App\BoundedContexts\Infrastructure\Events\DomainEvent\Factory\DomainEventFactory;
use Cake\Database\Connection;
use InvalidArgumentException;
use Ramsey\Uuid\Uuid;

use function array_merge;
use function is_array;
use function json_decode;
use function json_encode;

use const JSON_THROW_ON_ERROR;

abstract class BaseAppEvent implements CAppEventOriginatingContexts, IAppEvent
{
    protected static string $subsystem = self::SUBSYSTEM_DEFAULT;
    protected static string $sourceTable = self::SOURCE_TABLE_PRIMARY;
    protected static string $insert = '';
    protected static string $read = '';

    protected IRAppEvent $repository;

    private string $action;
    private string $description;
    private ?string $detail;
    private string $uuid;
    private array $readback;

    /**
     * @throws \JsonException
     */
    public function __construct(
        IRAppEvent $repository,
        string $action,
        string $description,
        ?array $detail = null
    ) {
        $this->repository = $repository;
        $this->action = $action;
        $this->description = $description;
        $this->detail = is_array($detail) ? json_encode($detail, JSON_THROW_ON_ERROR) : null;
        $this->uuid = Uuid::uuid4()->toString();

        $this->validateSubclass();
    }

    private function validateSubclass(): void
    {
        if ('' === static::$insert) {
            throw new InvalidArgumentException('Must set database insert sql');
        }
        if ('' === static::$read) {
            throw new InvalidArgumentException('Must set database readback sql');
        }
        if ('' === static::$subsystem) {
            throw new InvalidArgumentException('Must set event subsystem');
        }
    }

    /**
     * @throws \JsonException
     */
    public function addDetail(array $detail): void
    {
        $prior = (null === $this->detail) ? [] : json_decode((string)$this->detail, true, 512, JSON_THROW_ON_ERROR);
        $new = array_merge($prior, $detail);
        $this->detail = json_encode($new, JSON_THROW_ON_ERROR);
    }

    public function save(?Connection $conn = null): void
    {
        $parms = [
            $this->action,
            static::$subsystem,
            $this->description,
            $this->detail,
            $this->uuid,
        ];
        $this->readback = $this->repository->save(static::$insert, static::$read, $parms);
    }

    public function notify(): void
    {
        if (empty($this->readback)) {
            return;
        }
        $domainEvent = DomainEventFactory::domainEvent();
        $domainEvent->notifyDomainEvent(static::$sourceTable, $this->readback);
    }

}

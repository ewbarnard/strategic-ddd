<?php

declare(strict_types=1);

namespace LegacyBoundedContexts\Infrastructure\Events\AppEvent\ApplicationServices;

use Doctrine\DBAL\Connection;
use InvalidArgumentException;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Constants\CAppEventOriginatingContexts;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IAppEvent;
use LegacyBoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IRAppEvent;

use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\Factory\DomainEventFactory;
use Ramsey\Uuid\Uuid;

use function array_merge;
use function is_array;
use function json_decode;
use function json_encode;

use const JSON_THROW_ON_ERROR;

abstract class BaseAppEvent implements CAppEventOriginatingContexts, IAppEvent
{
    /** @var string */
    protected static $subsystem = self::SUBSYSTEM_DEFAULT;
    /** @var string */
    protected static $sourceTable = self::SOURCE_TABLE_PRIMARY;
    /** @var string */
    protected static $insert = '';
    /** @var string */
    protected static $read = '';

    /** @var IRAppEvent */
    protected $repository;

    /** @var string */
    private $action;
    /** @var string */
    private $description;
    /** @var ?string */
    private $detail;
    /** @var string */
    private $uuid;
    /** @var array */
    private $readback;

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
        $this->detail = is_array($detail) ?
            json_encode($detail, JSON_THROW_ON_ERROR) : null;
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
        $prior = (null === $this->detail) ? [] :
            json_decode(
                (string)$this->detail,
                true,
                512,
                JSON_THROW_ON_ERROR
            );
        $new = array_merge($prior, $detail);
        $this->detail = json_encode($new, JSON_THROW_ON_ERROR);
    }

    public function save(Connection $connection): void
    {
        if (self::DISABLE_APP_EVENT) {
            return;
        }

        $parms = [
            $this->action,
            static::$subsystem,
            $this->description,
            $this->detail,
            $this->uuid,
        ];
        $this->readback = $this->repository
            ->save(static::$insert, static::$read, $parms, $connection);
    }

    public function notify(): void
    {
        if (self::DISABLE_APP_EVENT) {
            return;
        }

        if (empty($this->readback)) {
            return;
        }
        $domainEvent = DomainEventFactory::domainEvent();
        $domainEvent->notifyDomainEvent(static::$sourceTable, $this->readback);
    }
}

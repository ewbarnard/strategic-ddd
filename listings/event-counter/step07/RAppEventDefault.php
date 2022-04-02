<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\Repository;

use App\BoundedContexts\Infrastructure\Events\AppEvent\DomainModel\Interfaces\IRAppEvent;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\AppEventsPrimaryTrait;
use Cake\Database\Connection;
use Cake\Database\Exception\DatabaseException;

use function array_key_exists;
use function is_array;

final class RAppEventDefault implements IRAppEvent
{
    use AppEventsPrimaryTrait;

    public function __construct()
    {
        $this->loadModels();
    }

    private function loadModels(): void
    {
        $this->loadLocalAppEventsTable();
    }

    /**
     * Should be called while within a transaction
     */
    public function save(
        string $insert,
        string $read,
        array $parms,
        Connection $conn
    ): array {
        $statement = $conn->prepare($insert);
        $statement->execute($parms);
        $statement = $conn->prepare($read);
        $statement->execute([$statement->lastInsertId()]);
        $readback = $statement->fetchAll('assoc');
        if (!(is_array($readback) && array_key_exists(0, $readback))) {
            throw new DatabaseException('Event readback failed');
        }
        return $readback[0];
    }
}

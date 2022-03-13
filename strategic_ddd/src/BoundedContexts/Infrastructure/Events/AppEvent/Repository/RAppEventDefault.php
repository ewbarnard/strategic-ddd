<?php

declare(strict_types=1);

namespace App\BoundedContexts\Infrastructure\Events\AppEvent\Repository;

use App\BoundedContexts\Infrastructure\Events\DomainModel\Interfaces\IRAppEvent;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\AppEventsPrimaryTrait;
use Cake\Database\Exception\DatabaseException;
use Exception;

use function is_array;

final class RAppEventDefault implements IRAppEvent
{
    use AppEventsPrimaryTrait;

    private ?array $readback;

    public function __construct()
    {
        $this->loadModels();
    }

    private function loadModels(): void
    {
        $this->loadLocalAppEventsTable();
    }

    public function save(string $insert, string $read, array $parms): array
    {
        $connection = $this->localAppEventsTable->getConnection();
        try {
            $connection->transactional(function ($conn) use ($insert, $read, $parms) {
                /** @var \Cake\Database\StatementInterface $statement */
                $statement = $conn->prepare($insert);
                $statement->execute($parms);
                $statement = $conn->prepare($read);
                $statement->execute([$statement->lastInsertId()]);
                $this->readback = $statement->fetchAll('assoc');
                if (!is_array($this->readback)) {
                    throw new DatabaseException('Event readback failed');
                }
            });
        } catch (Exception) {
            return [];
        }

        return $this->readback;
    }
}

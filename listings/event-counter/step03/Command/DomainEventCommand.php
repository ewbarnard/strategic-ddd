<?php

declare(strict_types=1);

namespace App\Command;

use App\BoundedContexts\Infrastructure\Events\DomainEvent\Factory\DomainEventFactory;
use App\BoundedContexts\Infrastructure\LoadTableModels\PrimaryDatabase\Events\GlobalEventsTrait;
use App\Model\Entity\LocalAppEvent;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;
use Cake\I18n\FrozenTime;
use Ramsey\Uuid\Nonstandard\Uuid;

use function microtime;
use function random_int;
use function sprintf;

final class DomainEventCommand extends Command
{
    use GlobalEventsTrait;

    /**
     * @throws \Exception
     */
    public function execute(Arguments $args, ConsoleIo $io): ?int
    {
        $this->loadDomainEventsTable();
        $service = DomainEventFactory::domainEvent();
        $data = [
            LocalAppEvent::FIELD_ACTION => 'Test',
            LocalAppEvent::FIELD_SUBSYSTEM => 'Command Line',
            LocalAppEvent::FIELD_DESCRIPTION => sprintf('%.6f', microtime(true)),
            LocalAppEvent::FIELD_DETAIL => null,
            LocalAppEvent::FIELD_EVENT_UUID => Uuid::uuid4()->toString(),
            LocalAppEvent::FIELD_WHEN_OCCURRED => FrozenTime::now(),
            LocalAppEvent::FIELD_CREATED => FrozenTime::now(),
            LocalAppEvent::FIELD_MODIFIED => FrozenTime::now(),
        ];
        $event = $this->domainEventsTable->newEntity($data)->toArray();
        $event[LocalAppEvent::FIELD_ID] = random_int(1, 999999999);
        $service->notifyDomainEvent('command line', $event);
        $io->out('Domain event complete.');

        return 0;
    }
}

<?php

declare(strict_types=1);

namespace App\Command;

use App\BoundedContexts\Infrastructure\Events\AppEvent\Factory\AppEventFactory;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;

final class AppEventCommand extends Command
{
    /**
     * @throws \JsonException
     */
    public function execute(Arguments $args, ConsoleIo $io): ?int
    {
        $action = 'Command-line test';
        $description = 'app_event command';
        $appEvent = AppEventFactory::defaultAppEvent($action, $description);
        $appEvent->save();
        $appEvent->notify();

        return 0;
    }
}

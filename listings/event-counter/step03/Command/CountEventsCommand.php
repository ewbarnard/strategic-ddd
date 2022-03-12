<?php

declare(strict_types=1);

namespace App\Command;

use App\BoundedContexts\SpikeCountEvents\Factory\CountEventsFactory;
use Cake\Command\Command;
use Cake\Console\Arguments;
use Cake\Console\ConsoleIo;

final class CountEventsCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io): ?int
    {
        $service = CountEventsFactory::countEvents();
        $service->insertCurrentCount();
        $io->out('Count complete');

        return 0;
    }
}

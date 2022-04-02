<?php

use LegacyBoundedContexts\Infrastructure\Events\DomainEvent\Factory\DomainEventFactory;
use Ramsey\Uuid\Uuid;

require_once(__DIR__ . '/bootstrap.php');

$service = DomainEventFactory::domainEvent();
try {
    $event = [
        'id' => random_int(1, 99999999),
        'action' => 'Legacy Test',
        'subsystem' => 'Command Line',
        'description' => sprintf('%.6f', microtime(true)),
        'detail' => null,
        'event_uuid' => Uuid::uuid4()->toString(),
        'when_occurred' => date('Y-m-d H:i:s'),
        'created' => date('Y-m-d H:i:s'),
        'modified' => date('Y-m-d H:i:s'),
    ];
    $service->notifyDomainEvent('legacy command line', $event);
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
echo 'Domain event complete' . PHP_EOL;

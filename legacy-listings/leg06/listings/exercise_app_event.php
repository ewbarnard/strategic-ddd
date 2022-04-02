<?php

use LegacyBoundedContexts\Infrastructure\Events\AppEvent\Factory\AppEventFactory;

require_once(__DIR__ . '/bootstrap.php');

$action = 'Legacy command-line test';
$description = 'exercise_app_event command';

try {
    $appEvent = AppEventFactory::defaultAppEvent(
        $action,
        $description
    );
    $appEvent->save();
    $appEvent->notify();
} catch (JsonException $e) {
    echo 'Epic fail: ' . $e->getMessage() . PHP_EOL;
}

echo 'Application event complete' . PHP_EOL;

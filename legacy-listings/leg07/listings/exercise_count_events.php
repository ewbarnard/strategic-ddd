<?php

use LegacyBoundedContexts\SpikeCountEvents\Factory\CountEventsFactory;

require_once(__DIR__ . '/bootstrap.php');

$service = CountEventsFactory::countEvents();
$service->insertCurrentCount();
$service->insertCurrentCount();
echo 'Count complete' . PHP_EOL;

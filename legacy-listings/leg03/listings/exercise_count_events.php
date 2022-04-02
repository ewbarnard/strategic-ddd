<?php

use LegacyBoundedContexts\ContextRoot;

require_once(__DIR__ . '/bootstrap.php');

echo 'Road Trip' . PHP_EOL;
$expected = 'Road Trip';
$target = new ContextRoot();
$actual = $target->echoBack($expected);
echo "Expected $expected, actual $actual" . PHP_EOL;

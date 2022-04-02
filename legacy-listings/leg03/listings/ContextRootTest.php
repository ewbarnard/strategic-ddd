<?php

declare(strict_types=1);

namespace Test\LegacyBoundedContexts;

use LegacyBoundedContexts\ContextRoot;
use PHPUnit\Framework\TestCase;

class ContextRootTest extends TestCase
{
    public function testEchoBack(): void
    {
        $target = new ContextRoot();
        $expected = 'test input string';
        $actual = $target->echoBack($expected);

        static::assertSame($expected, $actual);
    }
}

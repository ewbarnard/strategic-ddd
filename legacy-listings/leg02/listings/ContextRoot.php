<?php

declare(strict_types=1);

namespace LegacyBoundedContexts;

final class ContextRoot
{
    public function echoBack(string $input): string
    {
        return $input;
    }
}

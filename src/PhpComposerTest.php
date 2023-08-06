<?php

declare(strict_types=1);

namespace Remarkablemark\PhpComposerTest;

class PhpComposerTest {
    public function say(string $name = 'world'): string
    {
        return "Hello, $name!";
    }
}

<?php

declare(strict_types=1);

use Remarkablemark\PhpComposerTest\PhpComposerTest;

it('says "Hello, world!"', function (): void {
    $test = new PhpComposerTest();
    expect($test->say())->toBe('Hello, world!');
});

it('says "Hello, Mark!"', function (): void {
    $test = new \Remarkablemark\PhpComposerTest\PhpComposerTest();
    expect($test->say('Mark'))->toBe('Hello, Mark!');
});

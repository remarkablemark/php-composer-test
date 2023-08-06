<?php

use Remarkablemark\PhpComposerTest\PhpComposerTest;

it('says "Hello, world!"', function () {
    $test = new PhpComposerTest();
    expect($test->say())->toBe('Hello, world!');
});

it('says "Hello, Mark!"', function () {
    $test = new \Remarkablemark\PhpComposerTest\PhpComposerTest();
    expect($test->say('Mark'))->toBe('Hello, Mark!');
});

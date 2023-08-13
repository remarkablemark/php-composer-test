# php-composer-test

[![packagist](https://img.shields.io/packagist/v/remarkablemark/php-composer-test)](https://packagist.org/packages/remarkablemark/php-composer-test)
[![test](https://github.com/remarkablemark/php-composer-test/actions/workflows/test.yml/badge.svg)](https://github.com/remarkablemark/php-composer-test/actions/workflows/test.yml)
[![codecov](https://codecov.io/gh/remarkablemark/php-composer-test/branch/master/graph/badge.svg?token=NkVwvHqXqm)](https://codecov.io/gh/remarkablemark/php-composer-test)

PHP Composer Test. See [Replit demo](https://replit.com/@remarkablemark/php-composer-test#main.php).

## Requirements

PHP >=7

## Install

Install with [Composer](http://getcomposer.org/):

```sh
composer require remarkablemark/php-composer-test
```

## Usage

Autoload:

```php
require_once 'vendor/autoload.php';
```

Use namespace:

```php
use Remarkablemark\PhpComposerTest\PhpComposerTest;

$test = new PhpComposerTest();
echo $test->say(); // 'Hello, world!'
```

Or instantiate class:

```php
$test = new \Remarkablemark\PhpComposerTest\PhpComposerTest();
echo $test->say('Mark'); // 'Hello, Mark!'
```

## License

[MIT](LICENSE)

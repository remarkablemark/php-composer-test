# php-composer-test

PHP Composer Test. See [Replit demo](https://replit.com/@remarkablemark/php-composer-test#main.php).

## Requirements

PHP 7 and later.

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

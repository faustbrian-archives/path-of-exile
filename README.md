# Path of Exile PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/Path-of-Exile-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/Path-of-Exile-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/path-of-exile-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/Path-of-Exile-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/Path-of-Exile-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/Path-of-Exile-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/Path-of-Exile-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require faustbrian/path-of-exile-php-client
```

## Usage

``` php
<?php

use BrianFaust\Config;

$client = new BrianFaust\PoE\Client();

print_r($client->api('PvPMatches')->all());
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)

# Path of Exile PHP Client

[![Build Status](https://img.shields.io/travis/plients/Path-of-Exile-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/plients/Path-of-Exile-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/plients/path-of-exile.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/plients/Path-of-Exile-PHP-Client.svg?style=flat-square)](https://github.com/plients/Path-of-Exile-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/plients/Path-of-Exile-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/plients/Path-of-Exile-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

``` bash
$ composer require plients/path-of-exile
```

## Usage

``` php
<?php

use Plients\Config;

$client = new Plients\PoE\Client();

print_r($client->api('PvPMatches')->all());
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@basecode.sh. All security vulnerabilities will be promptly addressed.

## License

Mozilla Public License Version 2.0 ([MPL-2.0](./LICENSE)).

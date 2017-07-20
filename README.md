# Path of Exile PHP Client

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

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)

<?php

/*
 * This file is part of Path of Exile PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\PoE;

use BrianFaust\Zttp\Zttp;

class Client
{
    public function api(string $name)
    {
        $client = Zttp::withBaseUri('http://api.pathofexile.com/');

        $class = "BrianFaust\\PoE\\API\\{$name}";

        return new $class($client);
    }
}

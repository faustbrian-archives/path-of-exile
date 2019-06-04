<?php

declare(strict_types=1);

/*
 * This file is part of Path of Exile PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\PoE;

use Plients\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\PoE\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('http://api.pathofexile.com/');

        $class = "Plients\\PoE\\API\\{$name}";

        return new $class($client);
    }
}

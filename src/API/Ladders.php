<?php

/*
 * This file is part of Path of Exile PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\PoE\API;

use BrianFaust\Http\HttpResponse;

class Ladders extends AbstractAPI
{
    /**
     * Get a ladder by league id. There is a restriction in place on the last
     * ladder entry you are able to retrieve which is set to 15000.
     *
     * @param int   $id
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function get(int $id, array $parameters = []): HttpResponse
    {
        return $this->client->get("ladders/{$id}", $parameters);
    }
}

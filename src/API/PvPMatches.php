<?php

/*
 * This file is part of Path of Exile PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\PoE\API;

use BrianFaust\Http\HttpResponse;

class PvPMatches extends AbstractAPI
{
    /**
     * Get a list of PvP matches.
     *
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(array $parameters = []): HttpResponse
    {
        return $this->client->get('pvp-matches', $parameters);
    }
}

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

class LeagueRules extends AbstractAPI
{
    /**
     * Get a list of all possible league rules.
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(): HttpResponse
    {
        return $this->client->get('league-rules');
    }

    /**
     * Get a single league rule by id.
     *
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function get(int $id): HttpResponse
    {
        return $this->client->get("league-rules/{$id}", $parameters);
    }
}

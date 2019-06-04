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

namespace Plients\PoE\API;

use Plients\Http\HttpResponse;

class LeagueRules extends AbstractAPI
{
    /**
     * Get a list of all possible league rules.
     *
     * @return \Plients\Http\HttpResponse
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
     * @return \Plients\Http\HttpResponse
     */
    public function get(int $id): HttpResponse
    {
        return $this->client->get("league-rules/{$id}", $parameters);
    }
}

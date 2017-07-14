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

class LeagueRules extends AbstractAPI
{
    /**
     * Get a list of all possible league rules.
     *
     * @return array
     */
    public function all(): ?array
    {
        return $this->client->get('league-rules')->json();
    }

    /**
     * Get a single league rule by id.
     *
     * @param int $id
     *
     * @return array
     */
    public function get(int $id): ?array
    {
        return $this->client->get("league-rules/{$id}", $parameters)->json();
    }
}

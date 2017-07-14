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

class Leagues extends AbstractAPI
{
    /**
     * Get a list of current and past leagues.
     *
     * @param array $parameters
     *
     * @return array
     */
    public function all(array $parameters = []): ?array
    {
        return $this->client->get('leagues')->json();
    }

    /**
     * Get a single league by id.
     *
     * @param int   $id
     * @param array $parameters
     *
     * @return array
     */
    public function get(int $id, array $parameters = []): ?array
    {
        return $this->client->get("leagues/$id")->json();
    }
}

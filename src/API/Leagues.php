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

class Leagues extends AbstractAPI
{
    /**
     * Get a list of current and past leagues.
     *
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function all(array $parameters = []): HttpResponse
    {
        return $this->client->get('leagues');
    }

    /**
     * Get a single league by id.
     *
     * @param int   $id
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function get(int $id, array $parameters = []): HttpResponse
    {
        return $this->client->get("leagues/{$id}");
    }
}

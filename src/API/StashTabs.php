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

class StashTabs extends AbstractAPI
{
    /**
     * Retrieves a list of stashes, accounts, and items as described above in the Introduction section.
     *
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function get(?int $id = null): HttpResponse
    {
        return $this->client->get('public-stash-tabs', compact('id'));
    }
}

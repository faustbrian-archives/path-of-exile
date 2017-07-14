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

class StashTabs extends AbstractAPI
{
    /**
     * Retrieves a list of stashes, accounts, and items as described above in the Introduction section.
     *
     * @param int $id
     *
     * @return array
     */
    public function get(?int $id = null): ?array
    {
        return $this->client->get('public-stash-tabs', compact('id'))->json();
    }
}

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

class StashTabs extends AbstractAPI
{
    /**
     * Retrieves a list of stashes, accounts, and items as described above in the Introduction section.
     *
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function get(?int $id = null): HttpResponse
    {
        return $this->client->get('public-stash-tabs', compact('id'));
    }
}

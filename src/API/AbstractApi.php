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

use BrianFaust\Zttp\PendingZttpRequest;

abstract class AbstractAPI
{
    /**
     * @var \BrianFaust\Zttp\PendingZttpRequest
     */
    protected $client;

    /**
     * Create a new API class instance.
     *
     * @param \BrianFaust\Zttp\PendingZttpRequest $client
     */
    public function __construct(PendingZttpRequest $client)
    {
        $this->client = $client;
    }
}

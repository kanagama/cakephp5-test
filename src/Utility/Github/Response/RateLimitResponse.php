<?php

namespace App\Utility\Github\Response;

use App\Utility\Github\ValueObject\RateLimit\Rate;
use App\Utility\Github\ValueObject\RateLimit\Resources;
use stdClass;

/**
 * @property-read Rate $rate
 * @property-read Resources $resources
 */
final class RateLimitResponse
{
    /**
     * @var Rate
     */
    public readonly Rate $rate;

    /**
     * @var Resources
     */
    public readonly Resources $resources;

    /**
     * @param  stdClass  $response
     */
    public function __construct(
        stdClass $response
    ) {
        $this->rate = new Rate(
            $response->rate->limit,
            $response->rate->used,
            $response->rate->remaining,
            $response->rate->reset,
        );

        $this->resources = new Resources($response->resources);
    }
}
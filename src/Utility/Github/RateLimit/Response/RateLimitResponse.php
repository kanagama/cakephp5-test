<?php
declare(strict_types=1);

namespace App\Utility\Github\RateLimit\Response;

use App\Utility\Github\RateLimit\ValueObject\Rate;
use App\Utility\Github\RateLimit\ValueObject\Resources;
use stdClass;

/**
 * @property-read \App\Utility\Github\RateLimit\ValueObject\Rate $rate
 * @property-read \App\Utility\Github\RateLimit\ValueObject\Resources $resources
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class RateLimitResponse
{
    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\Rate
     */
    public readonly Rate $rate;

    /**
     * @var \App\Utility\Github\RateLimit\ValueObject\Resources
     */
    public readonly Resources $resources;

    /**
     * @param \stdClass $response
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

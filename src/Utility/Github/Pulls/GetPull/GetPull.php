<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\GetPull;

use App\Utility\Github\Pulls\GetPull\Response\GetPullResponse;
use stdClass;

/**
 * @author k-nagama <k-nagama@se-ec.co.jp>
 */
final class GetPull implements GetPullInterface
{
    /**
     * @return \App\Utility\Github\Pulls\GetPull\Response\
     */
    public function get(): GetPullResponse
    {
        return new GetPullResponse(new stdClass([]));
    }
}

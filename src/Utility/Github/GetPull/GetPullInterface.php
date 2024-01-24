<?php
declare(strict_types=1);

namespace App\Utility\Github\GetPull;

use App\Utility\Github\GetPull\Response\GetPullResponse;

/**
 * @author k-nagama <k-nagama@se-ec.co.jp>
 */
interface GetPullInterface
{
    /**
     * @return GetPullResponse
     */
    public function get(): GetPullResponse;
}

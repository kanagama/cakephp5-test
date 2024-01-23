<?php
declare(strict_types=1);

namespace App\Utility\Github\GetPull;



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
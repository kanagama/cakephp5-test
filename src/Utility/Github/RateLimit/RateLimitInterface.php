<?php
declare(strict_types=1);

namespace App\Utility\Github\RateLimit;

use App\Utility\Github\RateLimit\Response\RateLimitResponse;

/**
 * 認証済みユーザのレート制限ステータスを取得する
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
interface RateLimitInterface
{
    /**
     * @return \App\Utility\Github\RateLimit\Response\RateLimitResponse;
     * @throws \RuntimeException
     */
    public function get(): RateLimitResponse;
}

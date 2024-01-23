<?php
declare(strict_types=1);

namespace App\Utility\Github\RateLimit;

use App\Utility\Github\RateLimit\Response\RateLimitResponse;
use RuntimeException;

/**
 * 認証済みユーザのレート制限ステータスを取得する
 */
interface RateLimitInterface
{
    /**
     * @return RateLimitResponse
     * @throws RuntimeException
     */
    public function get(): RateLimitResponse;
}

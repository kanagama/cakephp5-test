<?php

namespace App\Utility\Github;

use App\Utility\Github\Response\RateLimitResponse;

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
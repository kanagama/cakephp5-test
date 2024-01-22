<?php

namespace App\Utility\Github;

use App\Utility\Github\Response\UserResponse;
use RuntimeException;

/**
 * ユーザー情報を取得する
 */
interface UserInterface
{
    /**
     * @return UserResponse
     * @throws RuntimeException
     */
    public function get(): UserResponse;
}

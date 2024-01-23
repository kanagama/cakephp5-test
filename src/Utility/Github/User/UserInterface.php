<?php

namespace App\Utility\Github\User;

use App\Utility\Github\User\Response\UserResponse;
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

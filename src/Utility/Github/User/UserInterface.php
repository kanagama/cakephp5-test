<?php
declare(strict_types=1);

namespace App\Utility\Github\User;

use App\Utility\Github\User\Response\UserResponse;

/**
 * ユーザー情報を取得する
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
interface UserInterface
{
    /**
     * @return \App\Utility\Github\User\Response\UserResponse
     * @throws \RuntimeException
     */
    public function get(): UserResponse;
}

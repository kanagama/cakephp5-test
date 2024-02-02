<?php
declare(strict_types=1);

namespace App\Utility\Github\User;

use App\Utility\Github\User\Response\UserResponse;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Http\Client\Request;
use Cake\Http\Client\Response;
use RuntimeException;

/**
 * githubユーザ情報を取得する
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class User implements UserInterface
{
    /**
     * @return \App\Utility\Github\User\Response\UserResponse
     */
    public function get(): UserResponse
    {
        $response = (new Client())->sendRequest(
            new Request(
                'https://api.github.com/user',
                Request::METHOD_GET,
                Configure::consume('Github.requestHeader'),
            )
        );

        if ($response->getStatusCode() !== Response::STATUS_OK) {
            throw new RuntimeException();
        }

        return new UserResponse(
            json_decode($response->getBody()->getContents())
        );
    }
}

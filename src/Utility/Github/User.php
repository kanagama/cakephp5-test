<?php

namespace App\Utility\Github;

use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Http\Client\Request;
use Cake\Http\Client\Response;
use App\Utility\Github\Response\UserResponse;
use RuntimeException;

/**
 * githubユーザ情報を取得する
 */
final class User implements UserInterface
{
    /**
     * @return UserResponse
     */
    public function get(): UserResponse
    {
        $response = (new Client())->sendRequest(
            new Request(
                'https://api.github.com/user',
                Request::METHOD_GET,
                Configure::consume('Github'),
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

<?php

namespace App\Utility\Github;

use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Http\Client\Request;
use Cake\Http\Client\Response;
use App\Utility\Github\Response\RateLimitResponse;
use RuntimeException;

/**
 * 認証済みユーザのレート制限ステータスを取得する
 */
final class RateLimit implements RateLimitInterface
{
    /**
     * @return RateLimitResponse
     */
    public function get(): RateLimitResponse
    {
        $response = (new Client())->sendRequest(
            new Request(
                'https://api.github.com/rate_limit',
                Request::METHOD_GET,
                Configure::consume('Github'),
            )
        );

        if ($response->getStatusCode() !== Response::STATUS_OK) {
            throw new RuntimeException();
        }

        return new RateLimitResponse(
            json_decode($response->getBody()->getContents())
        );
    }
}
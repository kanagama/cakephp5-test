<?php
declare(strict_types=1);

namespace App\Utility\Github\RateLimit;

use App\Utility\Github\RateLimit\Response\RateLimitResponse;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Http\Client\Request;
use Cake\Http\Client\Response;
use RuntimeException;

/**
 * 認証済みユーザのレート制限ステータスを取得する
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class RateLimit implements RateLimitInterface
{
    /**
     * @return \App\Utility\Github\RateLimit\Response\RateLimitResponse
     */
    public function get(): RateLimitResponse
    {
        $response = (new Client())->sendRequest(
            new Request(
                'https://api.github.com/rate_limit',
                Request::METHOD_GET,
                Configure::consume('Github.requestHeader'),
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

<?php
declare(strict_types=1);

namespace App\Utility\Github\ListPull;

use App\Utility\Github\ListPull\Request\ListPullRequest;
use App\Utility\Github\ListPull\Response\ListPullResponse;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Http\Client\Request;
use Cake\Http\Client\Response;
use RuntimeException;

/**
 * Undocumented class
 */
final class ListPull implements ListPullInterface
{
    /**
     * Undocumented function
     *
     * @param ListPullRequest $request
     * @return ListPullResponse
     */
    public function get(ListPullRequest $request): ListPullResponse
    {
        $response = (new Client())->sendRequest(
            new Request(
                'https://api.github.com/repos/' . Configure::consume('Github.owner'). '/' . Configure::consume('Github.repository') . '/pulls',
                Request::METHOD_GET,
                Configure::consume('Github.requestHeader'),
                $request->toArray(),
            )
        );

        if ($response->getStatusCode() !== Response::STATUS_OK) {
            throw new RuntimeException();
        }

        return new ListPullResponse(
            json_decode($response->getBody()->getContents())
        );
    }
}

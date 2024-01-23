<?php
declare(strict_types=1);

namespace App\Utility\Github\ListPull;

use App\Utility\Github\ListPull\Request\ListPullRequest;
use App\Utility\Github\ListPull\Response\ListPullResponse;
use Cake\Collection\Collection;
use Cake\Core\Configure;
use Cake\Http\Client;
use Cake\Http\Client\Request;
use Cake\Http\Client\Response;
use RuntimeException;

/**
 * プルリクエストの一覧
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class ListPull implements ListPullInterface
{
    /**
     * プルリクエストの一覧を取得
     *
     * @param ListPullRequest $request
     * @return Collection
     */
    public function get(ListPullRequest $request): Collection
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

        $collection = [];
        foreach (json_decode($response->getBody()->getContents()) as $pull) {
            $$collection[] = new ListPullResponse($pull);
        }

        return new Collection($collection);
    }
}

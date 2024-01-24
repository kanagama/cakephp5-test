<?php
declare(strict_types=1);

namespace App\Utility\Github\ListCommentOnPull;

use App\Utility\ListCommentOnPull\Response\ListCommentOnPullResponse;

/**
 * 該当プルリクのコメント一覧を取得する
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class ListCommentOnPull implements ListCommentOnPullInterface
{
    /**
     * @return ListCommentOnPullResponse
     */
    public function get(): ListCommentOnPullResponse
    {
        return new ListCommentOnPullResponse();
    }
}

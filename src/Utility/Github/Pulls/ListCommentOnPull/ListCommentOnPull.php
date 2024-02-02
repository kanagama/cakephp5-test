<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\ListCommentOnPull;

use App\Utility\Pulls\ListCommentOnPull\Response\ListCommentOnPullResponse;

/**
 * 該当プルリクのコメント一覧を取得する
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class ListCommentOnPull implements ListCommentOnPullInterface
{
    /**
     * @return \App\Utility\Pulls\ListCommentOnPull\Response\ListCommentOnPullRespon
     */
    public function get(): ListCommentOnPullResponse
    {
        return new ListCommentOnPullResponse();
    }
}

<?php
declare(strict_types=1);

namespace App\Utility\Github\ListPull;

use App\Utility\Github\ListPull\Request\ListPullRequest;
use App\Utility\Github\ListPull\Response\ListPullResponse;

/**
 *
 */
interface ListPullInterface
{
    /**
     * @param  ListPullRequest  $request
     * @return ListPullResponse
     */
    public function get(ListPullRequest $request): ListPullResponse;
}

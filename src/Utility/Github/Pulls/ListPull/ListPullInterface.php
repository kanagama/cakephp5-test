<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\ListPull;

use App\Utility\Github\Pulls\ListPull\Request\ListPullRequest;
use Cake\Collection\Collection;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 */
interface ListPullInterface
{
    /**
     * @param \App\Utility\Github\Pulls\ListPull\Request\ListPullRequest $request
     * @return \Cake\Collection\Collection
     */
    public function get(ListPullRequest $request): Collection;
}

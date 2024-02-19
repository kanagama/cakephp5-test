<?php
declare(strict_types=1);

namespace App\Utility\Github\ListPull\Response;

use App\Utility\Github\User\User;
use stdClass;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class ListPullResponse
{
    public readonly int $id;

    public readonly string $url;

    public readonly string $nodeId;

    public readonly string $htmlUrl;

    public readonly string $patchUrl;

    public readonly string $issueUrl;

    public readonly int $number;

    public readonly string $state;

    public readonly bool $locked;

    public readonly string $title;

    public readonly User $user;

    /**
     * @param  StdClass  $response
     */
    public function __construct(StdClass $response)
    {
        dd($response);
    }
}

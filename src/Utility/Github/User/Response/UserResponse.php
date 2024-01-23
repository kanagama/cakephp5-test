<?php
declare(strict_types=1);

namespace App\Utility\Github\User\Response;

use Cake\I18n\DateTime;
use stdClass;

/**
 * @property-read string $login ログインユーザー名
 * @property-read int $id ログインid
 * @property-read string $node_id
 * @property-read string $avatar_url
 * @property-read string|null $gravatar_id
 * @property-read string $url
 * @property-read string $html_url
 * @property-read string $followers_url フォロワーURL
 * @property-read string $following_url フォローURL
 * @property-read string $gists_url
 * @property-read string $starred_url
 * @property-read string $subscriptions_url
 * @property-read string $organizations_url
 * @property-read string $repos_url リポジトリ一覧URL
 * @property-read string $events_url
 * @property-read string $received_events_url
 * @property-read string $type
 * @property-read bool $site_admin
 * @property-read string $name
 * @property-read string|null $company 所属企業名
 * @property-read string $blog
 * @property-read string $location
 * @property-read string|null $email
 * @property-read string|null $hireable
 * @property-read string $bio
 * @property-read string|null $twitter_username Xユーザー名
 * @property-read int $public_repos パブリックリポジトリ数
 * @property-read int $public_gists
 * @property-read int $followers フォロワー数
 * @property-read int $following フォロー数
 * @property-read Datetime $created_at 登録日時
 * @property-read Datetime $updated_at 更新日時
 */
final class UserResponse
{
    public readonly string $login;

    public readonly int $id;

    public readonly string $node_id;

    public readonly string $avatar_url;

    public readonly string|null $gravatar_id;

    public readonly string $url;

    public readonly string $html_url;

    public readonly string $followers_url;

    public readonly string $following_url;

    public readonly string $gists_url;

    public readonly string $starred_url;

    public readonly string $subscriptions_url;

    public readonly string $organizations_url;

    public readonly string $repos_url;

    public readonly string $events_url;

    public readonly string $received_events_url;

    public readonly string $type;

    public readonly bool $site_admin;

    public readonly string $name;

    public readonly string|null $company;

    public readonly string $blog;

    public readonly string $location;

    public readonly string|null $email;

    public readonly string|null $hireable;

    public readonly string $bio;

    public readonly string|null $twitter_username;

    public readonly int $public_repos;

    public readonly int $public_gists;

    public readonly int $followers;

    public readonly int $following;

    public readonly Datetime $created_at;

    public readonly Datetime $updated_at;

    /**
     * @param  stdClass  $response
     */
    public function __construct(
        stdClass $response
    ) {
        $this->login = $response->login;
        $this->id = $response->id;
        $this->node_id = $response->node_id;
        $this->avatar_url = $response->avatar_url;
        $this->gravatar_id = $response->gravatar_id;
        $this->url = $response->url;
        $this->html_url = $response->html_url;
        $this->followers_url = $response->followers_url;
        $this->following_url = $response->following_url;
        $this->gists_url = $response->gists_url;
        $this->starred_url = $response->starred_url;
        $this->subscriptions_url = $response->subscriptions_url;
        $this->organizations_url = $response->organizations_url;
        $this->repos_url = $response->repos_url;
        $this->events_url = $response->events_url;
        $this->received_events_url = $response->received_events_url;
        $this->type = $response->type;
        $this->site_admin = $response->site_admin;
        $this->name = $response->name;
        $this->company = $response->company;
        $this->blog = $response->blog;
        $this->location = $response->location;
        $this->email = $response->email;
        $this->hireable = $response->hireable;
        $this->bio = $response->bio;
        $this->twitter_username = $response->twitter_username;
        $this->public_repos = $response->public_repos;
        $this->public_gists = $response->public_gists;
        $this->followers = $response->followers;
        $this->following = $response->following;
        $this->created_at = new Datetime($response->created_at);
        $this->updated_at = new Datetime($response->updated_at);
    }
}

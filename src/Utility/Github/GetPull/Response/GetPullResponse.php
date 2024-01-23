<?php

namespace App\Utility\Github\GetPull\Response;

use App\Utility\Github\User\Response\UserResponse;
use Cake\I18n\DateTime;
use stdClass;

/**
 * @property-read int $id プルリクid
 * @property-read string $url プルリクURL
 * @property-read string $node_id
 * @property-read string $html_url
 * @property-read string $diff_url
 * @property-read string $patch_url
 * @property-read string $issue_url
 * @property-read int $number プルリク番号
 * @property-read string $state プルリク状態
 * @property-read bool $locked
 * @property-read string $title プルリクタイトル
 * @property-read UserResponse $user
 * @property-read string|null $body
 * @property-read Datetime $created_at 登録日時
 * @property-read Datetime $updated_at 更新日時
 * @property-read Datetime|null $closed_at クローズ時間
 * @property-read Datetime|null $merged_at マージ時間
 * @property-read string $merge_commit_sha マージコミットハッシュ
 * @property-read string|null assignee
 * @property-read string[] assignees => [ ]
requested_reviewers => [ ]
requested_teams => [ ]
labels => [ ]
milestone => null
draft => false
commits_url => 'https://api.github.com/repos/kanagama/laravel-add-formrequest-accessor/pulls/24/commits'
review_comments_url => 'https://api.github.com/repos/kanagama/laravel-add-formrequest-accessor/pulls/24/comments'
review_comment_url => 'https://api.github.com/repos/kanagama/laravel-add-formrequest-accessor/pulls/comments{/number}'
comments_url => 'https://api.github.com/repos/kanagama/laravel-add-formrequest-accessor/issues/24/comments'
statuses_url => 'https://api.github.com/repos/kanagama/laravel-add-formrequest-accessor/statuses/ea3f6113dcfcc654c3ec178af02cabb424b1f274'
head => object(stdClass) id:2 {
label => 'kanagama:expire_comment'
ref => 'expire_comment'
sha => 'ea3f6113dcfcc654c3ec178af02cabb424b1f274'
user => object(stdClass) id:3 { }
repo => object(stdClass) id:4 { }
}
base => object(stdClass) id:7 {
label => 'kanagama:main'
ref => 'main'
sha => '85f6a8b41546894db44fab900d81b98d58e8e559'
user => object(stdClass) id:8 { }
repo => object(stdClass) id:9 { }
}
_links => object(stdClass) id:12 {
self => object(stdClass) id:13 { }
html => object(stdClass) id:14 { }
issue => object(stdClass) id:15 { }
comments => object(stdClass) id:16 { }
review_comments => object(stdClass) id:17 { }
review_comment => object(stdClass) id:18 { }
commits => object(stdClass) id:19 { }
statuses => object(stdClass) id:20 { }
}
author_association => 'OWNER'
auto_merge => null
active_lock_reason => null
 *
 * @author k-nagama <k-nagama@se-ec.co.jp>
 */
final class GetPullResponse
{
    private readonly int $id;

    /**
     * @param  stdClass  $response
     */
    public function __construct(stdClass $response)
    {

    }
}
<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\GetPull\Response;

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
 * @property-read \App\Utility\Github\User\Response\UserResponse $user
 * @property-read string|null $body
 * @property-read \Cake\I18n\DateTime $created_at 登録日時
 * @property-read \Cake\I18n\DateTime $updated_at 更新日時
 * @property-read \Cake\I18n\DateTime|null $closed_at クローズ時間
 * @property-read \Cake\I18n\DateTime|null $merged_at マージ時間
 * @property-read string $merge_commit_sha マージコミットハッシュ
 * @property-read string|null $assignee
 * @property-read string[] $assignees
 * @property-read string[] $requested_reviewers
 * @property-read string[] $requested_teams
 * @property-read string[] $labels
 * @property-read string|null $milestone
 * @property-read bool $draft ドラフトプルリク判定
 * @property-read string $commits_url
 * @property-read string $review_comments_url
 * @property-read string $review_comment_url
 * @property-read string $comments_url
 * @property-read string $statuses_url
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
 * @property-read string $author_association
 * @property-read bool|null $auto_merge
 * @property-read string|null $active_lock_reason
 * @author k-nagama <k-nagama@se-ec.co.jp>
 */
final class GetPullResponse
{
    /**
     * @param \stdClass $response
     */
    public function __construct(stdClass $response)
    {
        dd($response);
    }
}

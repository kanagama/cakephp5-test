<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

/**
 * Users テーブルを作成
 */
class Users extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('users');

        $table->addColumn('login', 'string', [
            'limit'   => 255,
            'null'    => false,
            'comment' => 'ログインユーザー名',
        ]);

        $table->addColumn('node_id', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('avatar_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('gravatar_id', 'string', [
            'limit' => 255,
            'null'  => true,
        ]);

        $table->addColumn('url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('html_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('followers_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('following_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('gists_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('starred_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('subscriptions_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('organizations_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('repos_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('events_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('received_events_url', 'text', [
            'null' => false,
        ]);

        $table->addColumn('type', 'string', [
            'limit' => 128,
            'null'  => false,
        ]);

        $table->addColumn('site_admin', 'boolean', [
            'null'  => false,
        ]);

        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('company', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('blog', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('location', 'text', [
            'null'  => false,
        ]);

        $table->addColumn('bio', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('email', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('hireable', 'string', [
            'limit' => 255,
            'null'  => false,
        ]);

        $table->addColumn('twitter_username', 'string', [
            'limit'  => 255,
            'null'   => false,
            'comment' => '登録X(Twitter)ユーザー名',
        ]);

        $table->addColumn('public_repos', 'integer', [
            'null'    => false,
            'signed'  => true,
            'comment' => '公開リポジトリ数',
        ]);

        $table->addColumn('public_gists', 'integer', [
            'null'    => false,
            'signed'  => true,
            'comment' => '公開gist数',
        ]);

        $table->addColumn('followers', 'integer', [
            'null'    => false,
            'signed'  => true,
            'comment' => 'フォロワー数',
        ]);

        $table->addColumn('following', 'integer', [
            'null'    => false,
            'signed'  => true,
            'comment' => 'フォロー数',
        ]);

        $table->addColumn('created', 'datetime', [
            'null'    => false,
            'comment' => '登録日時',
        ]);

        $table->addColumn('modified', 'datetime', [
            'null'    => false,
            'comment' => '更新日時',
        ]);

        $table->create();
    }
}

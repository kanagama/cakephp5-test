<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\ListPull\Request;

use App\Utility\Github\Pulls\ListPull\Request\ValueObject\Direction;
use App\Utility\Github\Pulls\ListPull\Request\ValueObject\Sort;
use App\Utility\Github\Pulls\ListPull\Request\ValueObject\State;

/**
 * ListPull パラメータ
 *
 * @property-read \App\Utility\Github\Pulls\ListPull\Request\ValueObject\State|null $state プルリクの状態オブジェクト
 * @property-read string|null $base ブランチ名
 * @property-read string|null $head フィルタリング
 * @property-read \App\Utility\Github\Pulls\ListPull\Request\ValueObject\Sort|null $sort 並び順オブジェクト
 * @property-read \App\Utility\Github\Pulls\ListPull\Request\ValueObject\Direction|null $direction 並び順昇降オブジェクト
 * @property-read int|null $perPage ページ毎の件数
 * @property-read int|null $page ページ番号
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class ListPullRequest
{
    /**
     * @var array
     */
    private readonly array $params;

    /**
     * @var \App\Utility\Github\Pulls\ListPull\Request\ValueObject\State|null
     */
    public readonly ?State $state;

    /**
     * @var string|null
     */
    public readonly ?string $base;

    /**
     * @var string|null
     */
    public readonly ?string $head;

    /**
     * @var \App\Utility\Github\Pulls\ListPull\Request\ValueObject\Sort|null
     */
    public readonly ?Sort $sort;

    /**
     * @var \\App\Utility\Github\Pulls\ListPull\Request\ValueObject\Direction|null
     */
    public readonly ?Direction $direction;

    /**
     * @var int|null
     */
    public readonly ?int $perPage;

    /**
     * @var int|null
     */
    public readonly ?int $page;

    /**
     * @param array $params
     */
    public function __construct(array $params)
    {
        $this->params = [];

        if (empty($params)) {
            return;
        }

        $this->params = $params;

        if (!empty($params['state'])) {
            $this->state = new State($params['state']);
        }
        if (!empty($params['head'])) {
            $this->head = $params['head'];
        }
        if (!empty($params['base'])) {
            $this->base = $params['base'];
        }
        if (!empty($params['sort'])) {
            $this->sort = new Sort($params['sort']);
        }
        if (!empty($params['direction'])) {
            $this->direction = new Direction($params['direction']);
        }
        if (!empty($params['per_page'] && is_numeric($params['per_page']))) {
            $this->perPage = (int)$params['per_page'];
        }
        if (!empty($params['page'] && is_numeric($params['page']))) {
            $this->page = (int)$params['page'];
        }
    }

    /**
     * 配列データを取得
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->params;
    }
}

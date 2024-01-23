<?php
declare(strict_types=1);

namespace App\Utility\Github\ListPull\Request;

use App\Utility\Github\ListPull\Request\ValueObject\Direction;
use App\Utility\Github\ListPull\Request\ValueObject\Sort;
use App\Utility\Github\ListPull\Request\ValueObject\State;

/**
 * ListPull パラメータ
 *
 * @property-read State|null $state プルリクの状態オブジェクト
 * @property-read string|null $base ブランチ名
 * @property-read string|null $head フィルタリング
 * @property-read Sort|null $sort 並び順オブジェクト
 * @property-read Direction|null $direction 並び順昇降オブジェクト
 * @property-read int|null $perPage ページ毎の件数
 * @property-read int|null $page ページ番号
 */
final Class ListPullRequest
{
    /**
     * @var array
     */
    private readonly array $params;

    public readonly State|null $state;
    public readonly string|null $base;
    public readonly string|null $head;
    public readonly Sort|null $sort;
    public readonly Direction|null $direction;
    public readonly int|null $perPage;
    public readonly int|null $page;

    /**
     * @param  $params
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
            $this->perPage = (int) $params['per_page'];
        }
        if (!empty($params['page'] && is_numeric($params['page']))) {
            $this->page = (int) $params['page'];
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

<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\ListPull\Request\ValueObject;

use InvalidArgumentException;

/**
 * 並び順
 *
 * @property-read string $value 格納された値
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class Sort
{
    /**
     * @test
     * @param  string  $value
     */
    public function __construct(
        public readonly string $value
    ) {
        if (!in_array($this->value, [
            self::getCraeted(),
            self::getUpdated(),
            self::getPopularity(),
            self::getLongRunning(),
        ], true)) {
            throw new InvalidArgumentException(__CLASS__ . ' に範囲外の値が渡されました。' . $this->value);
        }
    }

    /**
     * 登録順
     *
     * @test
     * @return string
     */
    public static function getCraeted(): string
    {
        return 'created';
    }

    /**
     * 更新順
     *
     * @test
     * @return string
     */
    public static function getUpdated(): string
    {
        return 'updated';
    }

    /**
     * 人気順（コメント数）
     *
     * @test
     * @return string
     */
    public static function getPopularity(): string
    {
        return 'popularity';
    }

    /**
     * ロングラン（作成順かつ1ヶ月以上前にオープンかつ1ヶ月以内に更新）
     *
     * @test
     * @return string
     */
    public static function getLongRunning(): string
    {
        return 'long-running';
    }
}

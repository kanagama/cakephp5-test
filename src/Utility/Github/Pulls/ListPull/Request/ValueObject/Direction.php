<?php
declare(strict_types=1);

namespace App\Utility\Github\Pulls\ListPull\Request\ValueObject;

use InvalidArgumentException;

/**
 * 並び順昇降
 *
 * @property-read string $value 格納された値
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class Direction
{
    /**
     * @test
     * @param  string  $value
     */
    public function __construct(
        public readonly string $value
    ) {
        if (!in_array($this->value, [
            self::getAsc(),
            self::getDesc(),
        ], true)) {
            throw new InvalidArgumentException(__CLASS__ . ' に範囲外の値が渡されました。' . $this->value);
        }
    }

    /**
     * 昇順の値を取得
     *
     * @test
     * @return string
     */
    public static function getAsc(): string
    {
        return 'asc';
    }

    /**
     * 降順の値を取得
     *
     * @test
     * @return string
     */
    public static function getDesc(): string
    {
        return 'desc';
    }
}

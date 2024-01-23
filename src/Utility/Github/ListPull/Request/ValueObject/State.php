<?php
declare(strict_types=1);

namespace App\Utility\Github\ListPull\Request\ValueObject;

use InvalidArgumentException;

/**
 * プルリクの状態
 *
 * @property-read string $value 格納された値
 *
 * @author k-nagama <k.nagama0632@gmail.com>
 */
final class State
{
    /**
     * @test
     * @param  string  $value
     */
    public function __construct(
        public readonly string $value
    ) {
        if (!in_array($this->value, [
            self::getOpen(),
            self::getClose(),
            self::getAll(),
        ], true)) {
            throw new InvalidArgumentException(__CLASS__ . ' に範囲外の値が渡されました。' . $this->value);
        }
    }

    /**
     * オープン
     *
     * @test
     * @return string
     */
    public static function getOpen(): string
    {
        return 'open';
    }

    /**
     * クローズ
     *
     * @test
     * @return string
     */
    public static function getClose(): string
    {
        return 'close';
    }

    /**
     * 全て
     *
     * @test
     * @return string
     */
    public static function getAll(): string
    {
        return 'all';
    }
}

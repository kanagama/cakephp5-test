<?php
declare(strict_types=1);

namespace Test\TestCase\Utility\Github\Pulls\ListPull\Request\ValueObject;

use App\Utility\Github\Pulls\ListPull\Request\ValueObject\Direction;
use Cake\TestSuite\TestCase;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 */
class DirectionTest extends TestCase
{
    /**
     * @test
     * @group valueobject
     */
    public function 昇順の値が取得できる()
    {
        $this->assertSame('asc', Direction::getAsc());
    }

    /**
     * @test
     * @group valueobject
     */
    public function 降順の値が取得できる()
    {
        $this->assertSame('desc', Direction::getDesc());
    }

    /**
     * @test
     * @group valueobject
     * @dataProvider objectProvider
     * @param  string  $value
     */
    public function 許可された値ではオブジェクト化できる(string $value)
    {
        $direction = new Direction($value);
        $this->assertSame($direction->value, $value);
    }

    /**
     * @return array
     */
    public static function objectProvider(): array
    {
        return [
            '昇順' => [
                'value' => Direction::getAsc(),
            ],
            '降順' => [
                'value' => Direction::getDesc(),
            ],
        ];
    }
}

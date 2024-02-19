<?php
declare(strict_types=1);

namespace Test\TestCase\Utility\Github\Pulls\ListPull\Request\ValueObject;

use App\Utility\Github\Pulls\ListPull\Request\ValueObject\Sort;
use Cake\TestSuite\TestCase;

/**
 * @author k-nagama <k.nagama0632@gmail.com>
 */
class SortTest extends TestCase
{
    /**
     * @test
     * @group valueobject
     */
    public function 登録日時順の値が取得できる()
    {
        $this->assertSame('created', Sort::getCraeted());
    }

    /**
     * @test
     * @group valueobject
     */
    public function 更新日時順の値が取得できる()
    {
        $this->assertSame('updated', Sort::getUpdated());
    }

    /**
     * @test
     * @group valueobject
     */
    public function 人気順の値が取得できる()
    {
        $this->assertSame('popularity', Sort::getPopularity());
    }

    /**
     * @test
     * @group valueobject
     */
    public function ロングランの値が取得できる()
    {
        $this->assertSame('long-running', Sort::getLongRunning());
    }

    /**
     * @test
     * @group valueobject
     * @dataProvider objectProvider
     * @param  string  $value
     */
    public function 許可された値ではオブジェクト化できる(string $value)
    {
        $sort = new Sort($value);
        $this->assertSame($sort->value, $value);
    }

    /**
     * @return array
     */
    public static function objectProvider(): array
    {
        return [
            '登録日時順' => [
                'value' => Sort::getCraeted(),
            ],
            '更新日時順' => [
                'value' => Sort::getUpdated(),
            ],
            '人気順' => [
                'value' => Sort::getPopularity(),
            ],
            'ロングラン' => [
                'value' => Sort::getLongRunning(),
            ],
        ];
    }
}

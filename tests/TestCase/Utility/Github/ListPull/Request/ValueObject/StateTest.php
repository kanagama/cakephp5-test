<?php
declare(strict_types=1);

namespace Test\TestCase\Utility\Github\ListPull\Request\ValueObject;

use App\Utility\Github\ListPull\Request\ValueObject\State;
use Cake\TestSuite\TestCase;

/**
 *
 */
class StateTest extends TestCase
{
    /**
     * @test
     * @group valueobject
     */
    public function オープンの値を取得できる()
    {
        $this->assertSame('open', State::getOpen());
    }

    /**
     * @test
     * @group valueobject
     */
    public function クローズの値を取得できる()
    {
        $this->assertSame('close', State::getClose());
    }

    /**
     * @test
     * @group valueobject
     */
    public function 全ての値を取得できる()
    {
        $this->assertSame('all', State::getAll());
    }

    /**
     * @test
     * @group valueobject
     * @dataProvider objectProvider
     * @param  string  $value
     */
    public function 許可された値ではオブジェクト化できる(string $value)
    {
        $state = new State($value);
        $this->assertSame($state->value, $value);
    }

    /**
     * @return array
     */
    public static function objectProvider(): array
    {
        return [
            'オープン' => [
                'value' => State::getOpen(),
            ],
            'クローズ' => [
                'value' => State::getClose(),
            ],
            '全て' => [
                'value' => State::getAll(),
            ],
        ];
    }
}

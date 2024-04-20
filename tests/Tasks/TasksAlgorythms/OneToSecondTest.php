<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use App\Tasks\OneToSecond;
use App\Tasks\SortCount;
use App\Tasks\Text;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class OneToSecondTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testOneToSecond(int $n1, int $n2, bool $expected_res)
    {
        $res = (new OneToSecond())->oneToSecond($n1, $n2);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'n1' => 2322,
                'n2' => 4442,
                'expected_res' => false,
            ],
            'empty2' => [
                'n1' => 2352,
                'n2' => 5322,
                'expected_res' => true,
            ],
            'emptyAll' => [
                'n1' => 1098,
                'n2' => 9081,
                'expected_res' => true,
            ],
            'one' => [
                'n1' => 2322,
                'n2' => 4442,
                'expected_res' => false,
            ],
        ];
    }
}
<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use App\Tasks\OneToSecond;
use App\Tasks\RookPairs;
use App\Tasks\SortCount;
use App\Tasks\Text;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class RookPairsTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetRookPairs(array $coords, int $expected_res)
    {
        $res = (new RookPairs())->getRookPairs($coords);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'coords' => [
                    [2,3],
                    [1,1],
                    [7,5],
                    [8,8],
                    [4,2],
                ],
                'expected_res' => 0,
            ],
            'empty2' => [
                'coords' => [
                    [1,3],
                    [1,1],
                    [1,5],
                    [1,8],
                    [1,2],
                ],
                'expected_res' => 4,
            ],
            'emptyAll' => [
                'coords' => [
                    [2,3],
                    [1,3],
                    [7,3],
                    [8,3],
                    [4,3],
                ],
                'expected_res' => 4,
            ],
            'one' => [
                'coords' => [
                    [2,3],
                    [1,1],
                    [1,3],
                    [7,5],
                    [7,7],
                    [5,5],
                    [8,8],
                    [4,2],
                ],
                'expected_res' => 4,
            ],
        ];
    }
}
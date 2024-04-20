<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use App\Tasks\OneToSecond;
use App\Tasks\QueenPairs;
use App\Tasks\RookPairs;
use App\Tasks\SortCount;
use App\Tasks\Text;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class QueenPairsTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetQueenPairs(array $coords, int $expected_res)
    {
        $res = (new QueenPairs())->getQueenPairs($coords);
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
                'expected_res' => 2,
            ],
            'empty2' => [
                'coords' => [
                    [2,3],
                    [1,1],
                    [7,5],
                    [8,8],
                    [4,2],
                    [2,2],
                    [8,4],
                ],
                'expected_res' => 7,
            ],
            'emptyAll' => [
                'coords' => [
                    [1,1],
                    [2,2],
                    [3,3],
                    [4,4],
                    [1,3],
                    [2,4],
                    [3,1],
                    [4,2],
                ],
                'expected_res' => 17,
            ],
        ];
    }
}
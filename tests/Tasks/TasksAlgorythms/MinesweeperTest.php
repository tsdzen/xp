<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\Minesweeper;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class MinesweeperTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetMap(array $bombs, int $rows, int $cols, $expected_res)
    {
        $res = (new Minesweeper())->getMap($bombs, $rows, $cols);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'bombs' => [[0,0], [0,1]],
                'rows' => 3,
                'cols' => 4,
                'expected_res' => [[-1,-1,1,0],[2,2,1,0],[0,0,0,0]]
            ],
        ];
    }
}
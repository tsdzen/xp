<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BFS;
use App\Tasks\BubbleSort;
use App\Tasks\ListMerge;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class BFSTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testAgjacencyList($arr, $expected_res)
    {
        $max = (new BFS())->getAgjacencyList($arr);
        $this->assertEquals($expected_res, $max);
    }

    #[DataProvider('dataProvider')]
    public function testBfs($arr, $expected_res)
    {
        $max = (new BFS())->getBfs($arr);
        $this->assertEquals($expected_res, $max);

    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [[1,3],[3,2],[1,2],[2,5],[5,6],[2,4]],
                'expected_res' => [
                    1 => [2,3],
                    2 => [1,3,4,5],
                    3 => [1,2],
                    4 => [2],
                    5 => [2,6],
                    6 => [5],
                ],
            ],
            'ten' => [
                'arr' => [[1,2],[2,5],[2,3],[3,4],[4,5],[4,6],[5,6]],
                'expected_res' => [
                    1 => [2],
                    2 => [1,3,5],
                    3 => [2,4],
                    4 => [3,5,6],
                    5 => [2,4,6],
                    6 => [4,5],
                ],
            ],
//            'negative' => [
//                'arr' => [],
//                'arr2' => [1,12,14,9,-3],
//                'expected_res' => [-3,1,9,12,14],
//            ],
//            'uniq' => [
//                'arr' => [1,2,4,11,5,109,74,9,3],
//                'arr2' => [1,5,0],
//                'expected_res' => [0,1,1,2,3,4,5,5,9,11,74,109],
//            ],
//            "emp" => [
//                'arr' => [3],
//                'arr2' => [1,12,14,9,-3],
//                'expected_res' => [-3,1,3,9,12,14],
//            ],
        ];
    }
}
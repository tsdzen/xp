<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BubbleSort;
use App\Tasks\ListMerge;
use App\Tasks\Sum;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class SumTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
        public function testSort($arr, $arr2, $expected_res)
    {
        $max = (new Sum())->sum($arr, $arr2);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [9,9,9],
                'arr2' => [9,9,9],
                'expected_res' => [1,9,9,8],
            ],
//            'one' => [
//                'arr' => [1,1,1,9,3],
//                'arr2' => [1,2,1,9,3],
//                'expected_res' => [-3,-3,1,1,9,9,12,12,14,14],
//            ],
//            'ten' => [
//                'arr' => [1,2,4],
//                'arr2' => [1,1,9],
//                'expected_res' => [-3,1,1,2,3,4,5,9,9,11,12,14,74,109],
//            ],
//            "emp" => [
//                'arr' => [3],
//                'arr2' => [1,2,1,9,3],
//                'expected_res' => [-3,1,3,9,12,14],
//            ],
        ];
    }
}
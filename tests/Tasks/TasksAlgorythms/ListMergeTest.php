<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BubbleSort;
use App\Tasks\ListMerge;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class ListMergeTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
        public function testSort($arr, $arr2, $expected_res)
    {
        $max = (new ListMerge())->sort($arr, $arr2);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [1,7,4,9,3],
                'arr2' => [1,12,14,9,-3],
                'expected_res' => [-3,1,1,3,4,7,9,9,12,14],
            ],
            'one' => [
                'arr' => [1,12,14,9,-3],
                'arr2' => [1,12,14,9,-3],
                'expected_res' => [-3,-3,1,1,9,9,12,12,14,14],
            ],
            'ten' => [
                'arr' => [1,2,4,11,5,109,74,9,3],
                'arr2' => [1,12,14,9,-3],
                'expected_res' => [-3,1,1,2,3,4,5,9,9,11,12,14,74,109],
            ],
            'negative' => [
                'arr' => [],
                'arr2' => [1,12,14,9,-3],
                'expected_res' => [-3,1,9,12,14],
            ],
            'uniq' => [
                'arr' => [1,2,4,11,5,109,74,9,3],
                'arr2' => [1,5,0],
                'expected_res' => [0,1,1,2,3,4,5,5,9,11,74,109],
            ],
            "emp" => [
                'arr' => [3],
                'arr2' => [1,12,14,9,-3],
                'expected_res' => [-3,1,3,9,12,14],
            ],
        ];
    }
}
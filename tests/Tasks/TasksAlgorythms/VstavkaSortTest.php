<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BubbleSort;
use App\Tasks\VstavkaSort;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class VstavkaSortTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
        public function testSort($arr, $expected_res)
    {
        $max = (new VstavkaSort())->sort($arr);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [1,7,4,9,3],
                'expected_res' => [1,3,4,7,9],
            ],
            'one' => [
                'arr' => [1,12,14,9,-3],
                'expected_res' => [-3,1,9,12,14],
            ],
            'ten' => [
                'arr' => [0,2,-4,9,3],
                'expected_res' => [-4,0,2,3,9],
            ],
            'negative' => [
                'arr' => [],
                'expected_res' => [],
            ],
            'uniq' => [
                'arr' => [11,22,-4,9,3],
                'expected_res' => [-4,3,9,11,22]
            ],
            "emp" => [
                'arr' => [3],
                'expected_res' => [3],
            ],
            "no" => [
                'arr' => [1,2,4,11,5,109,74,9,3],
                'expected_res' => [1,2,3,4,5,9,11,74,109],
            ],
        ];
    }
}
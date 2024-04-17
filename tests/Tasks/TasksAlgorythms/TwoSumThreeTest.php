<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\MostFrequentElement;
use App\Tasks\TwoMaxInArray;
use App\Tasks\TwoSumThree;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class TwoSumThreeTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testTwoSumThree($arr, $sum, $expected_res)
    {
        $pair = (new TwoSumThree())->getTwoSumThree($arr, $sum);
        $this->assertEquals($expected_res, $pair);
    }

    public static function dataProvider()
    {
        return [
            'oneOnly' => [
                'arr' => [3],
                'sum' => 3,
                'expected_res' => [0,0],
            ],
            'empty0' => [
                'arr' => [],
                'sum' => 9,
                'expected_res' => [0,0],
            ],
            'empty' => [
                'arr' => [1,2,2,1,4,2,3],
                'sum' => 7,
                'expected_res' => [3,4],
            ],
            'one' => [
                'arr' => [4,5],
                'sum' => 9,
                'expected_res' => [4,5],
            ],
            'ten' => [
                'arr' => [4,6,2,3,8,5],
                'sum' => 8,
                'expected_res' => [2,6],
            ],
            'negative' => [
                    'arr' => [2,4,5],
                    'sum' => 8,
                    'expected_res' => [0,0],
            ],
            'uniq' => [
                'arr' => [0,1,3,4],
                'sum' => 4,
                'expected_res' => [1,3],
            ]
        ];
    }
}
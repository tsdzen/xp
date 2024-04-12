<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\MostFrequentElement;
use App\Tasks\TwoMaxInArray;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class TwoMaxInArrayTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testTwoMax($arr, $expected_res)
    {
        $max = (new TwoMaxInArray())->getTwoMaxSecondSolution($arr);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [1,2,2,1,4,2,3],
                'expected_res' => [4,3],
            ],
            'one' => [
                'arr' => [4,4],
                'expected_res' => [4,4],
            ],
            'ten' => [
                'arr' => [2,1,2,4,4,6,2,3,6,8,5],
                'expected_res' => [8,6],
            ],
            'negative' => [
                    'arr' => [-1,-3,-4,-1,-1],
                    'expected_res' => [-1,-1],
            ],
            'uniq' => [
                'arr' => [0,0,-1,-10],
                'expected_res' => [0,0],
            ]
        ];
    }
}
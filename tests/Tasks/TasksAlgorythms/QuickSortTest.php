<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\MinEvenNumber;
use App\Tasks\QuickSortMy;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class QuickSortTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testSortQuick($arr, $expected_res)
    {
        $sorted = (new QuickSortMy())->sortQuick($arr);
        $this->assertEquals($expected_res, $sorted);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [1,2,8,9,4,0,3],
                'expected_res' => [0,1,2,3,4,8,9],
            ],
            'one' => [
                'arr' => [4],
                'expected_res' => [4],
            ],
            'ten' => [
                'arr' => [4,2,6,3,7],
                'expected_res' => [2,3,4,6,7],
            ],
            'negative' => [
                    'arr' => [-1,-3,-4,-5,-7],
                    'expected_res' => [-7, -5, -4, -3, -1],
            ],
            'uniq' => [
                'arr' => [4,2],
                'expected_res' => [2,4],
            ],
            "emp" => [
                'arr' => [],
                'expected_res' => [],
            ],
            "no" => [
                'arr' => [1,3,5],
                'expected_res' => [1,3,5],
            ],
        ];
    }
}
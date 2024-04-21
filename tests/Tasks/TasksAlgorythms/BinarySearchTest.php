<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BinarySearch;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class BinarySearchTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
        public function testSearch($arr, $el, $expected_res)
    {
        $max = (new BinarySearch())->search($arr, $el);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [1,7,4,9,3],
                'el' => 6,
                'expected_res' => false,
            ],
            'one' => [
                'arr' => [1,12,14,
                    9,-3],
                'el' => 9,
                'expected_res' => true,
            ],
            'ten' => [
                'arr' => [0,2,-4,9,3],
                'el' => -4,
                'expected_res' => true,
            ],
            'negative' => [
                'arr' => [],
                'el' => 6,
                'expected_res' => false,
            ],
            'uniq' => [
                'arr' => [11,22,-4,9,3],
                'el' => 22,
                'expected_res' => true,
            ],
            "emp" => [
                'arr' => [3],
                'el' => 3,
                'expected_res' => true,
            ],
            "no" => [
                'arr' => [1,2,4,11,5,109,74,9,3],
                'el' => 3,
                'expected_res' => true,
            ],
        ];
    }
}
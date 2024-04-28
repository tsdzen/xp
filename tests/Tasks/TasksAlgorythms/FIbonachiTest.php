<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BubbleSort;
use App\Tasks\Factorial;
use App\Tasks\Fibonachi;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class FIbonachiTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
        public function testFactorial($arr, $expected_res)
    {
        $max = (new Fibonachi())->getSeq($arr);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => 3,
                'expected_res' => 2,
            ],
            'one' => [
                'arr' => 5,
                'expected_res' => 5,
            ],
            'negative' => [
                'arr' => 8,
                'expected_res' => 21,
            ],
        ];
    }
}
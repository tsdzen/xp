<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BubbleSort;
use App\Tasks\Factorial;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class FactorialTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
        public function testFactorial($arr, $expected_res)
    {
        $max = (new Factorial())->factArray($arr);
        $this->assertEquals($expected_res, $max);
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [1,7,4,9,3],
                'expected_res' => [1,5040,24,362880,6],
            ],
            'one' => [
                'arr' => [1,12,14,9],
                'expected_res' => [1,479001600,87178291200,362880],
            ],
            'negative' => [
                'arr' => [],
                'expected_res' => [],
            ],
        ];
    }
}
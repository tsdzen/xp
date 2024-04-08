<?php

namespace Examples\TasksAlgorythms;

use App\Examples\TasksAlgorythms\MostFrequent;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class MostFrequentTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testMostFrequent($arr, $expected_res)
    {
        $mostFrequent = new MostFrequent();
        $this->assertEquals($expected_res, $mostFrequent->findMostFrequent($arr), );
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [],
                'expected_res' => \Exception::class,
            ],
            'one' => [
                'arr' => [4],
                'expected_res' => 4,
            ],
            'ten' => [
                'arr' => [2,1,2,4,4,6,2,3,6,8,5],
                'expected_res' => 2,
            ],
                'negative' => [
                    'arr' => [-1,3,4,-1,-1],
                    'expected_res' => -1,
            ],
            'uniq' => [
                'arr' => [6,4,5,3,2,1],
                'expected_res' => 6,
            ]
        ];
    }
}
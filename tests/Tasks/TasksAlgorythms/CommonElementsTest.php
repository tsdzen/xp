<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\CommonElements;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class CommonElementsTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testFindCommonElementsFirstSolution($arr1, $arr2, $expected_res)
    {
        $commonEls = new CommonElements();
        $this->assertEquals($expected_res,  $commonEls->findCommonElements($arr1, $arr2));
    }

    #[DataProvider('dataProvider')]
    public function testFindCommonElementsSecondSolution($arr1, $arr2, $expected_res)
    {
        $commonEls = new CommonElements();
        $this->assertEquals($expected_res,  $commonEls->findCommonElementsSecondSolution($arr1, $arr2));
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'arr1' => [],
                'arr2' => [1, 2],
                'expected_res' => [],
            ],
            'empty2' => [
                'arr1' => [1, 2],
                'arr2' => [],
                'expected_res' => [],
            ],
            'emptyAll' => [
                'arr1' => [],
                'arr2' => [],
                'expected_res' => [],
            ],
            'one' => [
                'arr1' => [4],
                'arr2' => [4],
                'expected_res' => [4],
            ],
            'ten' => [
                'arr1' => [2,1,2,4,4,6,2,3,6,8,5],
                'arr2' => [1,2,3],
                'expected_res' => [1,2,3],
            ],
            'negative' => [
                'arr1' => [-1,3,4,-1,-1],
                'arr2' => [-1,2,3],
                'expected_res' => [-1, 3],
            ],
            'uniq' => [
                'arr1' => [6,4,5,3,2,1],
                'arr2' => [6,4,5,3,2,1],
                'expected_res' => [1,2,3,4,5,6],
            ]
        ];
    }
}
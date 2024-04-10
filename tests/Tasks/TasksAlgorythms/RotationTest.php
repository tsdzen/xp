<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\Rotation;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertTrue;

class RotationTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testIsRotated(array $arr1, array $arr2, bool $expected_res)
    {
        $res = (new Rotation())->isRotated($arr1, $arr2);
        assertTrue($res === $expected_res);
    }

    #[DataProvider('dataProvider')]
    public function testIsRotatedSecondSolution($arr1, $arr2, $expected_res)
    {
        $res = (new Rotation())->isRotatedSecondSolution($arr1, $arr2);
        assertTrue($res === $expected_res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'arr1' => [],
                'arr2' => [1, 2],
                'expected_res' => false,
            ],
            'empty2' => [
                'arr1' => [1, 2],
                'arr2' => [],
                'expected_res' => false,
            ],
            'emptyAll' => [
                'arr1' => [],
                'arr2' => [],
                'expected_res' => true,
            ],
            'one' => [
                'arr1' => [4],
                'arr2' => [4],
                'expected_res' => true,
            ],
            'ten' => [
                'arr1' => [2,1,2,4,4,6,2,3,6,8,5],
                'arr2' => [1,2,3],
                'expected_res' => false,
            ],
            'negative' => [
                'arr1' => [-1,3,4,-1,-1],
                'arr2' => [-1,2,3],
                'expected_res' => false,
            ],
            'uniq' => [
                'arr1' => [6,4,5,3,2,1],
                'arr2' => [6,4,5,3,2,1],
                'expected_res' => true,
            ],
            'yes1' => [
                'arr1' => [6,4,5,3,2,1],
                'arr2' => [3,2,1,6,4,5],
                'expected_res' => true,
            ],
            'extra' => [
                'arr1' => [6,4,5,3,2,1],
                'arr2' => [3,2,1,6,4,5,7],
                'expected_res' => false,
            ],
            'yes2' => [
                'arr1' => [6,4,5,3,2,1],
                'arr2' => [1,6,4,5,3,2],
                'expected_res' => true,
            ]
        ];
    }
}
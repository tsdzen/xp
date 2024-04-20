<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use App\Tasks\SortCount;
use App\Tasks\Text;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class SortCountTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testSortCount(array $dict, array $expected_res)
    {
        $res = (new SortCount())->sortCount($dict);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'dict' => [4,3,4,4,6,5,7,7,5,4,4,3],
                'expected_res' => [3,3,4,4,4,4,4,5,5,6,7,7],
            ],
            'empty2' => [
                'dict' => [1,1,5,7,7,5,4,4,3],
                'expected_res' => [1,1,3,4,4,5,5,7,7],
            ],
            'emptyAll' => [
                'dict' => [1,3,1],
                'expected_res' => [1,1,3],
            ],
            'one' => [
                'dict' => [1,1,5,7,7,5,4,4,3],
                'expected_res' => [1,1,3,4,4,5,5,7,7],
            ],
        ];
    }
}
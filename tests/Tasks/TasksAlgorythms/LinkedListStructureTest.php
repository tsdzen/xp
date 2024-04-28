<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\BFS;
use App\Tasks\BubbleSort;
use App\Tasks\LinkedList;
use App\Tasks\LinkedListStructure;
use App\Tasks\ListMerge;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class LinkedListStructureTest extends LocalTestCase
{
//    #[DataProvider('dataProvider')]
//    public function testCreateBack($arr, $expected_res)
//    {
//        $max = (new LinkedListStructure())->createPushBackAndPopBack($arr);
//        $this->assertEquals($expected_res, $max);
//    }
//
//    #[DataProvider('dataProviderHead')]
//    public function testCreateHead($arr, $expected_res)
//    {
//        $max = (new LinkedListStructure())->createPushHeadPopHead($arr);
//        $this->assertEquals($expected_res, $max);
//    }

//    #[DataProvider('dataProviderHead')]
//    public function testCreateHead($arr, $expected_res)
//    {
//        $max = (new LinkedListStructure())->createPushHeadPopHead($arr);
//        $this->assertEquals($expected_res, $max);
//    }
//
//    #[DataProvider('dataProviderMix')]
//    public function testCreateMix($arr, $expected_res)
//    {
//        $max = (new LinkedListStructure())->createMix($arr);
//        $this->assertEquals($expected_res, $max);
//    }
//
//    #[DataProvider('dataProviderSize')]
//    public function testCreateSize($arr, $expected_res)
//    {
//        $max = (new LinkedListStructure())->getSize($arr);
//        $this->assertEquals($expected_res, $max);
//    }
//
//    #[DataProvider('dataProviderInsert')]
//    public function testCreateInsert($arr, $values, $expected_res)
//    {
//        $max = (new LinkedListStructure())->insert($arr, $values);
//        $this->assertEquals($expected_res, $max);
//    }

//    #[DataProvider('dataProviderDelete')]
//    public function testCreateDelete($arr, $indexes, $expected_res)
//    {
//        $max = (new LinkedListStructure())->delete($arr, $indexes);
//        $this->assertEquals($expected_res, $max);
//    }

    #[DataProvider('dataProviderGetElement')]
    public function testCreateGetElement($arr, $indexes, $expected_res)
    {
        $max = (new LinkedListStructure())->getElement($arr, $indexes);
        $this->assertEquals($expected_res, $max);
    }

//'expected_res' => ['2b', '2a', 'b', 'a'],
    public static function dataProviderGetElement()
    {
        return [
            'empty' => [
                'arr' => [
                    'pushHead' => ['a','b','c','d','e','f'],
                    'popHead' => 4,
                    'pushHead' => ['2a','2b','2c','2d','2e','2f'],
                    'popHead' => 4,
                ],
                'indexes' => [1,2,0],
                'expected_res' => ['2a', 'b', '2b'],
            ],
            'nullHead' => [
                'arr' => [
                    'pushHead' => ['a'],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popHead' => 0,
                ],
                'indexes' => [1,0],
                'expected_res' => [],
            ],
            '2Head' => [
                'arr' => [
                    'pushHead' => ['a'],
                    'popHead' => 0,
                    'pushHead' => ['b'],
                    'popHead' => 1,
                ],
                'indexes' => [0],
                'expected_res' => ['a'],
            ],
            'noHead' => [
                'arr' => [
                    'pushHead' => [],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popHead' => 1,
                ],
                'indexes' => [5,6,7],
                'expected_res' => [],
            ],
        ];
    }
    
    public static function dataProviderDelete()
    {
        return [
            'empty' => [
                'arr' => [
                    'pushHead' => ['a','b','c','d','e','f'],
                    'popHead' => 4,
                    'pushHead' => ['2a','2b','2c','2d','2e','2f'],
                    'popHead' => 4,
                ],
                'indexes' => [1,2,0],
                'expected_res' => ['b'],
            ],
            'nullHead' => [
                'arr' => [
                    'pushHead' => ['a'],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popHead' => 0,
                ],
                'indexes' => [1,0],
                'expected_res' => [],
            ],
            '2Head' => [
                'arr' => [
                    'pushHead' => ['a'],
                    'popHead' => 0,
                    'pushHead' => ['b'],
                    'popHead' => 1,
                ],
                'indexes' => [0],
                'expected_res' => [],
            ],
            'noHead' => [
                'arr' => [
                    'pushHead' => [],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popHead' => 1,
                ],
                'indexes' => [5,6,7],
                'expected_res' => [],
            ],
        ];
    }

    public static function dataProviderInsert()
    {
        return [
            'empty' => [
                'arr' => [
                    'pushHead' => ['a','b','c','d','e','f'],
                    'popHead' => 4,
                    'pushHead' => ['2a','2b','2c','2d','2e','2f'],
                    'popHead' => 4,
                ],
                'values' => [[1, '3i'], [0, '3a'], [5, '3b'], [3, '3c']],
                'expected_res' => ['3a', '2b', '3i', '3c', '2a', 'b', '3b', 'a'],
            ],
            'nullHead' => [
                'arr' => [
                    'pushHead' => ['a'],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popHead' => 0,
                ],
                'values' => [[1, '3i'], [0, '3a']],
                'expected_res' => ['3a'],
            ],
            '2Head' => [
                'arr' => [
                    'pushHead' => ['a'],
                    'popHead' => 0,
                    'pushHead' => ['b'],
                    'popHead' => 1,
                ],
                'values' => [[1, '3i'], [0, '3a']],
                'expected_res' => ['3a', 'a', '3i'],
            ],
            'noHead' => [
                'arr' => [
                    'pushHead' => [],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popHead' => 1,
                ],
                'values' => [[1, '3i'], [0, '3a']],
                'expected_res' => ['3a'],
            ],
        ];
    }

    public static function dataProviderMix()
    {
        return [
            'empty' => [
                'arr' => [
                    'pushBack' => ['a', 'b', 'c', 'd', 'e', 'f'],
                    'popHead' => 4,
                    'pushHead' => ['2a', '2b', '2c', '2d', '2e', '2f'],
                    'popBack' => 4,
                ],
                'expected_res' => ['2f', '2e', '2d', '2c'],
            ],
            '2Head' => [
                'arr' => [
                    'pushBack' => ['a'],
                    'popHead' => 0,
                    'pushHead' => ['b'],
                    'popBack' => 1,
                ],
                'expected_res' => ['b'],
            ],
            'noHead' => [
                'arr' => [
                    'pushBack' => [],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popBack' => 1,
                ],
                'expected_res' => [],
            ],
        ];
    }

    public static function dataProviderSize()
    {
        return [
            'empty' => [
                'arr' => [
                    'pushBack' => ['a', 'b', 'c', 'd', 'e', 'f'],
                    'popHead' => 4,
                    'pushHead' => ['2a', '2b', '2c', '2d', '2e', '2f'],
                    'popBack' => 4,
                ],
                'expected_res' => [[1,2,3,4,5,6], [5,4,3,2], [3,4,5,6,7,8], [7,6,5,4]],
            ],
            '2Head' => [
                'arr' => [
                    'pushBack' => ['a'],
                    'popHead' => 0,
                    'pushHead' => ['b'],
                    'popBack' => 1,
                ],
                'expected_res' => [[1], [], [2], [1]],
            ],
            'noHead' => [
                'arr' => [
                    'pushBack' => [],
                    'popHead' => 1,
                    'pushHead' => [],
                    'popBack' => 1,
                ],
                'expected_res' => [[], [0], [], [0]],
            ],
        ];
    }

    public static function dataProviderHead()
    {
        return [
            'empty' => [
                'arr' => [
                    'add1' => ['a','b','c','d','e','f'],
                    'pop1' => 4,
                    'add2' => ['2a','2b','2c','2d','2e','2f'],
                    'pop2' => 4,
                ],
                'expected_res' => ['2b', '2a', 'b', 'a'],
            ],
            'nullHead' => [
                'arr' => [
                    'add1' => ['a'],
                    'pop1' => 1,
                    'add2' => [],
                    'pop2' => 0,
                ],
                'expected_res' => [],
            ],
            '2Head' => [
                'arr' => [
                    'add1' => ['a'],
                    'pop1' => 0,
                    'add2' => ['b'],
                    'pop2' => 1,
                ],
                'expected_res' => ['a'],
            ],
            'noHead' => [
                'arr' => [
                    'add1' => [],
                    'pop1' => 1,
                    'add2' => [],
                    'pop2' => 1,
                ],
                'expected_res' => [],
            ],
        ];
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [
                    'add1' => ['a','b','c','d','e','f'],
                    'pop1' => 4,
                    'add2' => ['2a','2b','2c','2d','2e','2f'],
                    'pop2' => 4,
                ],
                'expected_res' => ['a', 'b', '2a', '2b'],
            ],
            'nullHead' => [
                'arr' => [
                    'add1' => ['a'],
                    'pop1' => 1,
                    'add2' => [],
                    'pop2' => 0,
                ],
                'expected_res' => [],
            ],
            '2Head' => [
                'arr' => [
                    'add1' => ['a'],
                    'pop1' => 0,
                    'add2' => ['b'],
                    'pop2' => 1,
                ],
                'expected_res' => ['a'],
            ],
            'noHead' => [
                'arr' => [
                    'add1' => [],
                    'pop1' => 1,
                    'add2' => [],
                    'pop2' => 1,
                ],
                'expected_res' => [],
            ],
        ];
    }
}
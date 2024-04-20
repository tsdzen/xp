<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\GroupWords;
use App\Tasks\Hysto;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class GroupWordsTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetQueenPairs(array $words, array $expected_res)
    {
        $res = (new GroupWords())->getGroupedWords($words);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'first' => [
                'words' => ['ytu', 'ggf', 'ddd', 'gfg', 'tuy', 'tuy', 'ojou', 'uojj', 'uojo', 'ddd'],
                'expected_res' => [['ytu', 'tuy', 'tuy'], ['ggf', 'gfg'], ['ddd', 'ddd'], ['ojou', 'uojo'], ['uojj']],
            ],
            'empty2' => [
                'words' => ['aas', 'saa', 'dee', 'sas', 'ede'],
                'expected_res' => [['aas', 'saa'], ['dee', 'ede'], ['sas']],
            ],
            'emptyAll' => [
                'words' => ['aasss', 'sasas', 'sssaa', 'ssaas', 'assas'],
                'expected_res' => [['aasss', 'sasas', 'sssaa', 'ssaas', 'assas']],
            ],
        ];

    }
}
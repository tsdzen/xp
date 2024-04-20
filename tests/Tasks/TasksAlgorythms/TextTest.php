<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use App\Tasks\Text;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class TextTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testHasWords(array $dict, array $text, bool $expected_res)
    {
        $res = (new Text())->hasWords($dict, $text);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'dict' => ['aa','bb','cc'],
                'text' => ['bb', 'c'],
                'expected_res' => true,
            ],
            'empty2' => [
                'dict' => ['aa','bb','cc'],
                'text' => ['bb', 'ccc'],
                'expected_res' => false,
            ],
            'emptyAll' => [
                'dict' => ['aa','bb','cc'],
                'text' => ['b', 'c'],
                'expected_res' => true,
            ],
            'one' => [
                'dict' => ['aa','bb','cc'],
                'text' => ['bb', 'lll'],
                'expected_res' => false,
            ],
            'ten' => [
                'dict' => ['cc'],
                'text' => ['c'],
                'expected_res' => true,
            ],
            'negative' => [
                'dict' => ['aa','bb','cc'],
                'text' => ['bb', 'ca'],
                'expected_res' => false,
            ],
            'uniq' => [
                'dict' => ['aaa','bbbb','cccccc'],
                'text' => ['bbb', 'ccccc'],
                'expected_res' => true,
            ],
        ];
    }
}
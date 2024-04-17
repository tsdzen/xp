<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class TextTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetNonRepeating(string $str, ?string $expected_res)
    {
        $res = (new NonRepeatingCharacter())->getNonRepeating($str);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'str' => '',
                'expected_res' => null,
            ],
            'empty2' => [
                'str' => 'aaaa',
                'expected_res' => null,
            ],
            'emptyAll' => [
                'str' => 'abab',
                'expected_res' => null,
            ],
            'one' => [
                'str' => 'abc',
                'expected_res' => 'a',
            ],
            'ten' => [
                'str' => '    aas',
                'expected_res' => 's',
            ],
            'negative' => [
                'str' => 'svdcasdhbvjdflshlgsfbhljsfbgjl',
                'expected_res' => 'c',
            ],
            'uniq' => [
                'str' => 'ooooodddgdddsaasss',
                'expected_res' => 'g',
            ],
        ];
    }
}
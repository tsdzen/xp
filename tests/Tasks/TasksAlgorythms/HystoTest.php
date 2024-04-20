<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\Hysto;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class HystoTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetQueenPairs(string $str, array $expected_res)
    {
        $res = (new Hysto())->getHysto($str);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'first' => [
                'str' => 'aaaaa',
                'expected_res' => ['a' => 5],
            ],
            'empty2' => [
                'str' => 'aagsgggghdddaaa',
                'expected_res' => ['a' => 5, 'd' => 3, 'g' => 5, 'h' => 1, 's' => 1],
            ],
            'emptyAll' => [
                'str' => 'aaa!22,,,&^%$aa$$',
                'expected_res' => ['!' => 1, '$' => 3, '%' => 1, '&' => 1, ',' => 3, '2' => 2, '^' => 1, 'a' => 5],
            ],
        ];

    }
}
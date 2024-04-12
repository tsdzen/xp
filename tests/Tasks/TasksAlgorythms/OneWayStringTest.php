<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\NonRepeatingCharacter;
use App\Tasks\OneWayString;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class OneWayStringTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testInOneWay(string $str1, string $str2, bool $expected_res)
    {
        $res = (new OneWayString())->isOneWay($str1, $str2);
        assertEquals($expected_res, $res);
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'str1' => '',
                'str2' => '',
                'expected_res' => true,
            ],
            'empty2' => [
                'str1' => '',
                'str2' => 'ss',
                'expected_res' => false,
            ],
            'emptyAll' => [
                'str1' => 'sss',
                'str2' => 'ssss',
                'expected_res' => true,
            ],
            'five' => [
                'str1' => 'abcdef',
                'str2' => 'abcde',
                'expected_res' => true,
            ],
            'six' => [
                'str1' => 'aaa',
                'str2' => 'abc',
                'expected_res' => false,
            ],
            'seven' => [
                'str1' => 'abcde',
                'str2' => 'abcde',
                'expected_res' => true,
            ],
            'eight' => [
                'str1' => 'abc',
                'str2' => 'bcc',
                'expected_res' => false,
            ],
            'abc' => [
                'str1' => 'abcdef',
                'str2' => 'abccef',
                'expected_res' => true,
            ],
            'one' => [
                'str1' => 'abcde',
                'str2' => 'abcd',
                'expected_res' => true,
            ],
            'ten' => [
                'str1' => 'abde',
                'str2' => 'abcde',
                'expected_res' => true,
            ],
            'negative' => [
                'str1' => 'abcdef',
                'str2' => 'abqdef',
                'expected_res' => true,
            ],
            'uniq' => [
                'str1' => 'abcdef',
                'str2' => 'abccef',
                'expected_res' => true,
            ],
        ];
    }
}
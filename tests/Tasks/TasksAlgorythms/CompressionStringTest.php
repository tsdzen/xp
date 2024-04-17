<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\CompressionString;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;
use function PHPUnit\Framework\assertEquals;

class CompressionStringTest extends LocalTestCase
{
    #[DataProvider('dataProviderSimple')]
    public function testCompressSimple(string $str1, string $expected_res)
    {
        $res = (new CompressionString())->compressSimple($str1);
        assertEquals($expected_res, $res);
    }

    #[DataProvider('dataProvider')]
    public function testCompress(string $str1, string $expected_res)
    {
        $res = (new CompressionString())->compress($str1);
        assertEquals($expected_res, $res);
    }

    public static function dataProviderSimple(): array
    {
        return [
            'empty1' => [
                'str1' => 'aabbcc',
                'expected_res' => 'abc',
            ],
            'empty2' => [
                'str1' => 'abc',
                'expected_res' => 'abc',
            ],
            'emptyAll' => [
                'str1' => 'dddfffsssfffaaaaaff',
                'expected_res' => 'dfsfaf',
            ],
            'five' => [
                'str1' => 'abcdef',
                'expected_res' => 'abcdef',
            ],
        ];
    }

    public static function dataProvider(): array
    {
        return [
            'empty1' => [
                'str1' => 'aabbcc',
                'expected_res' => 'a2b2c2',
            ],
            'empty2' => [
                'str1' => 'abc',
                'expected_res' => 'a1b1c1',
            ],
            'emptyAll' => [
                'str1' => 'dddfffsssfffaaaaaff',
                'expected_res' => 'd3f3s3f3a5f2',
            ],
            'five' => [
                'str1' => 'abcdef',
                'expected_res' => 'a1b1c1d1e1f1',
            ],
            'six' => [
                'str1' => 'aaabbbsss',
                'expected_res' => 'a3b3s3',
            ],
            'seven' => [
                'str1' => 'abcdeee',
                'expected_res' => 'a1b1c1d1e3',
            ],
        ];
    }
}
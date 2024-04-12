<?php

namespace Tasks\TasksAlgorythms;

use App\Tasks\MostFrequentElement;
use App\Tasks\PitCraftRain;
use PHPUnit\Framework\Attributes\DataProvider;
use UTests\LocalTestCase;

class PitCraftRainTest extends LocalTestCase
{
    #[DataProvider('dataProvider')]
    public function testGetVolume($arr, $expected_res)
    {
        $this->assertEquals($expected_res, (new PitCraftRain())->getVolumeN($arr));
    }

    public static function dataProvider()
    {
        return [
            'empty' => [
                'arr' => [],
                'expected_res' => 0,
            ],
            'one' => [
                'arr' => [4],
                'expected_res' => 0,
            ],
            'ten' => [
                'arr' => [2,1,2,4,4,6,2,3,6,8,5],
                'expected_res' => 8,
            ],
                'negative' => [
                    'arr' => [1,3,4,1,1],
                    'expected_res' => 0,
            ],
            'uniq' => [
                'arr' => [6,4,5,15,5,10],
                'expected_res' => 8,
            ],
            'space' => [
                'arr' => [3,2,1,1,1,5,5],
                'expected_res' => 7,
            ]

        ];
    }
}
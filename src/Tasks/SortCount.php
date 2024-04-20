<?php

namespace App\Tasks;

class SortCount
{
    public function sortCount($arr): array
    {
        $k = max($arr) - min($arr) + 1;
        $counter = [];
        for ($i = 0; $i < $k; $i++) {
            $counter[$i] = 0;
        }
        foreach ($arr as $val) {
            $counter[$val - min($arr)] += 1;
        }

        $res = [];
        foreach ($counter as $ind => $val) {
            for ($j = 0; $j < $val; $j++) {
                $res[] = $ind + min($arr);
            }
        }
        return $res;
    }
}
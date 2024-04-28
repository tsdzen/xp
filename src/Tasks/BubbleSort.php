<?php

namespace App\Tasks;

class BubbleSort
{
    function sort($array): array
    {
        if (count($array) < 2) {
            return $array;
        }

        $i = count($array);
        while ($i > 1) {
            for ($j = 0; $j < $i-1; $j++) {
                if ($array[$j] > $array[$j+1]) {
                    [$array[$j], $array[$j+1]] = [$array[$j+1], $array[$j]];
                }
            }
            $i-=1;
        }

        return $array;
    }
}
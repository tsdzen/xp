<?php

namespace App\Tasks;

class VyborSort
{
    function minArray($array) {
        $min = $array[0];
        foreach ($array as $elem) {
            if ($elem < $min) {
                $min = $elem;
            }
        }
        return $min;
     }

    function sort($array): array
    {
        if (count($array) < 2) {
            return $array;
        }

        for ($i = 0; $i < count($array)-1; $i++) {
            $subArray = array_slice($array, $i+1);
            [$min, $ind] = [$subArray[0], 0];
            foreach ($subArray as $j => $jValue) {
                if ($jValue < $min) {
                    [$min, $ind] = [$jValue, $j];
                }
            }
            if ($min < $array[$i]) {
                [$array[$i], $array[$ind+$i+1]] = [$array[$ind+$i+1], $array[$i]];
            }
        }
        return $array;
    }

    function bSort($array): array
    {
        if (count($array) < 2) {
            return $array;
        }
        $i = count($array) - 1;

        while ($i > 0) {
            $j = $i - 1;
            while ($j >= 0) {
                if ($array[$j] > $array[$i]) {
                    [$array[$j], $array[$i]] = [$array[$i], $array[$j]];
                }
                $j -= 1;
            }
            $i -= 1;
        }

        return $array;
    }
}
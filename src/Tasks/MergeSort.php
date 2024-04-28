<?php

namespace App\Tasks;

class MergeSort
{
    function merge($arr1, $arr2)
    {
        $res = [];
        $i = 0;
        $j = 0;
        while ($i < count($arr1) && $j < count($arr2)) {
            if ($arr1[$i] > $arr2[$j]) {
                $res[] = $arr2[$j];
                $j += 1;
            } else {
                $res[] += $arr1[$i];
                $i += 1;
            }
        }
        if ($i < count($arr1)) {
            $res = array_merge($res, array_slice($arr1, $i));
        }
        if ($j < count($arr2)) {
            $res = array_merge($res, array_slice($arr2, $j));
        }
        return $res;
    }

    function sort($array): array
    {
        $l = count($array);
        if ($l === 1) {
            return $array;
        }
        $m = (int)($l/2);
        [$arr1, $arr2] = [array_slice($array, 0, $m), array_slice($array, $m)];
        return $this->merge($this->sort($arr1), $this->sort($arr2));
    }
}
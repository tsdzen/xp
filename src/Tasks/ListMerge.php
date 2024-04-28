<?php

namespace App\Tasks;

class ListMerge
{
    function sort($arr1, $arr2): array
    {
        $arr1 = (new QuickSort())->sortQuick($arr1);
        $arr2 = (new QuickSort())->sortQuick($arr2);
        $res = [];
        [$i,$j] = [0,0];
        while ($i < count($arr1) || $j < count($arr2)) {
            if ( $i < count($arr1) && ($j < count($arr2) && $arr1[$i] <= $arr2[$j])) {
                $res[] = $arr1[$i];
                $i += 1;
            } elseif ($j < count($arr2)) {
                $res[] = $arr2[$j];
                $j += 1;
            } else {
                $res[] = $arr1[$i];
                $i += 1;
            }
        }
        return $res;
    }
}
<?php

namespace App\Tasks;

class QuickSortMy
{
    function sort($array): array
    {
        if(count($array) < 2) {
            return $array;
        }
        $l = $r = [];
        $i = (int)(count($array)/2);
        $med = [$array[$i]];
        foreach ($array as $value) {
            if ($value < $med[0]) {
                $l[] = $value;
            } elseif ($value > $med[0]) {
                $r[] = $value;
            }
        }
        return array_merge($this->sort($l), [$med], $this->sort($r));
    }

    function qSort($array): array
    {
        $m = (int)(count($array) / 2);
        $lArr = $rArr = [];
        if (count($array) <= 1) {
            return $array;
        }
        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] > $array[$m]) {
                $rArr[] = $array[$i];
            } elseif ($array[$i] < $array[$m]) {
                $lArr[] = $array[$i];
            }
        }
        return array_merge($this->qSort($lArr), [$array[$m]], $this->qSort($rArr));
    }
}
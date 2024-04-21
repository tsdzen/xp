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
        $med = $array[$i];
        foreach ($array as $value) {
            if ($value < $med) {
                $l[] = $value;
            } elseif ($value > $med) {
                $r[] = $value;
            }
        }
        return array_merge($this->sort($l), [$med], $this->sort($r));
    }
}
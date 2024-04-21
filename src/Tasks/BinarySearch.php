<?php

namespace App\Tasks;

class BinarySearch
{
    function search($array, $el): int
    {
        if (count($array) < 2 && $array !== [$el]) {
            return false;
        }

        $array = (new QuickSortMy())->sort($array);
        $i = (int)(count($array)/2);
        $med = $array[$i];
        if ($el === $med) {
            return true;
        }

        $start = $length = 0;
        if ($el > $med) {
            $start = $i + 1;
            $length = count($array) - $i - 1;
        } else {
            $length = $i;
        }

        return $this->search(array_slice($array, $start, $length), $el);
    }
}
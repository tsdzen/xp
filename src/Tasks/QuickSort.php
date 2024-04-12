<?php

namespace App\Tasks;

class QuickSort
{
    function sortQuick($array): array
    {
        if (count($array) < 2) {
            return $array;
        }
        $base = $array[0];
        $less = [];
        $more = [];

        foreach ($array as $el) {
            if ($el < $base) {
                $less[] = $el;
            } elseif ($el > $base) {
                $more[] = $el;
            }
        }

        return array_merge($this->sortQuick($less),[$base],$this->sortQuick($more));
    }
}
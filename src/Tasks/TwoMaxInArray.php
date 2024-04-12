<?php
/**
* Definition for a singly-linked list.
* class ListNode {
*     public $val = 0;
*     public $next = null;
*     function __construct($val) { $this->val = $val; }
* }
*/

namespace App\Tasks;

class TwoMaxInArray
{
    function getTwoMax($array): array
    {
        if (count($array) < 2) {
            return [];
        }
        $max = $max2 = $array[0];
        $ind = 0;
        foreach ($array as $i => $item) {
            if ($item > $max) {
                $max = $item;
                $ind = $i;
            }
        }

        foreach ($array as $i => $item) {
            if ($i === $ind) {
                continue;
            }
            if ($item > $max2) {
                $max2 = $item;
            }
        }
        return [$max, $max2];
    }

    function getTwoMaxSecondSolution($array): array
    {
        if (count($array) < 2) {
            return [];
        }
        $max = $array[0];
        $max2 = $array[1];
        if ($max2 > $max) {
            [$max, $max2] = [$max2, $max];
        }

        foreach ($array as $i => $el) {
            if ($i === 0 || $i === 1) {
                continue;
            }
            if ($el > $max) {
                $max2 = $max;
                $max = $el;
            } elseif ($max2 < $el) {
                $max2 = $el;
            }
        }

        return [$max, $max2];
    }
}



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

class PitCraftRain
{
    function getVolumeN(array $arr): int
    {
        if (count($arr) < 3) {
            return 0;
        }
        $max = $arr[0];
        $i = 0;
        $res = 0;
        foreach ($arr as $ind => $el) {
            if ($el >= $max) {
                $max = $el;
                if (($ind - $i) > 1) {
                    for ($k = $i+1; $k < $ind; $k++) {
                        var_dump($k, $i);
                        $res += $arr[$i]-$arr[$k];
                    }
                }
                $i = $ind;

            }
        }
        $last = $arr[count($arr) - 1];
        $max = $arr[$last];
        for ($i = $last-1; $i>0; $i-=1) {
            if ($arr[$i] >= $max) {
                $max = $arr[$i];
                if (($last - $i) > 1) {
                    for ($k = $last-1; $k > $i; $k-=1) {
                        $res += $arr[$last]-$arr[$k];
                    }
                }
                $last = $i;

            }
        }

        return $res;
    }

    function getVolume2(array $arr): int
    {
        $a0 = $b0 = true;
        $cnt = count($arr)-1;
        foreach ($arr as $a) {
            if (!($a0 || $b0))
            if ($a0 && $a === 0) {
                array_shift($arr);
            } else {
                $a0 = false;
            }

            if ($b0 && $arr[$cnt] === 0) {
                array_pop($arr);
            } else {
                $b0 = false;
            }
        }

        $res = 0;
        for ($i = 1; $i < (count($arr) - 1); $i += 1) {
            if ($arr[$i] === 0) {
                if ($arr[$i-1] > 0 && $arr[$i+1]) {
                    $res += 1;
                } elseif ($arr[$i+1] === 0) {

                }
            }
        }

        return 0;
//        $res = 0;
//        for ($i = 1; $i < (count($arr) - 1); $i += 1) {
//            $delta = min($arr[$i-1], $arr[$i+1]);
//            if ($delta > $arr[$i]) {
//                $res += ($delta - $arr[$i]);
//            } elseif ($delta < $arr[$i]) {
//                continue;
//            } else {
//
//            }
//
//        }
//        return 0;
    }
}


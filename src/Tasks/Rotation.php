<?php

namespace App\Tasks;

class Rotation
{
    public function isRotated(array $arr1, array $arr2): bool
    {
        if (count($arr1) !== count($arr2)) {
            return false;
        }
        if ($arr1 === $arr2) {
            return true;
        }

        $i = array_search($arr1[0], $arr2);
        $p2 = array_slice($arr2, 0, $i);
        $p1 = array_slice($arr2, $i, count($arr2));
        if ($arr1 === array_merge($p1, $p2)) {
            return true;
        }

        return false;
    }

    public function isRotatedSecondSolution(array $arr1, array $arr2): bool
    {
        if (count($arr1) !== count($arr2)) {
            return false;
        }
        if ($arr1 === $arr2) {
            return true;
        }

        $i = array_search($arr1[0], $arr2);
        if (!$i) {
            return false;
        }

        foreach ($arr1 as $j => $el) {
            if ($el !== $arr2[$i % count($arr2)]) {
                return false;
            }
            $i+=1;
        }

        return true;
    }
}
<?php

namespace App\Tasks;

class OneToSecond
{
    public function oneToSecond($n1, $n2): bool
    {
        $arr1 = $arr2 = [];
        [$whole1, $whole2] = [$n1, $n2];
        while ($whole1 !== 0 && $whole2 !== 0) {
            $arr1[] = $whole1%10;
            $arr2[] = $whole2%10;
            $whole1 = (int)($whole1/10);
            $whole2 = (int)($whole2/10);
        }
        sort($arr1);
        sort($arr2);
        return $arr1 === $arr2;
    }
}
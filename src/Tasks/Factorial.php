<?php

namespace App\Tasks;

class Factorial
{
    function fact($number): int
    {
        if ($number === 1) {
            return 1;
        }
        return $number * ($this->fact($number - 1));
    }

    function factArray($array)
    {
        $res = [];
        foreach ($array as $number) {
            $res[] = $this->fact($number);
        }
        return $res;
    }
}
<?php

namespace App\Tasks;

class Fibonachi
{
    function getSeq($n): int
    {
        if ($n === 1) {
            return 1;
        } elseif ($n === 2) {
            return 1;
        }
        return $this->getSeq($n-1) + $this->getSeq($n-2);
    }
}
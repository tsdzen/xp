<?php

namespace App\Examples\PerfectNumberTDD;

class PerfectNumber
{
    private $number;
    private $factors;

    public function __construct($number)
    {
        $this->number = $number;
        $this->factors = [];

        $this->factors[] = 1;
        $this->factors[] = $number;
    }

    public function getFactors()
    {
        return $this->factors;
    }
}
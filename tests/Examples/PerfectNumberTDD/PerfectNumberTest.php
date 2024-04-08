<?php

namespace UTests\Examples\PerfectNumberTDD;

use App\Examples\PerfectNumberTDD\PerfectNumber;
use UTests\LocalTestCase;

class PerfectNumberTest extends LocalTestCase
{
    public function testPerfectNumberCreation()
    {
        $p = new PerfectNumber(1);
        $this->assertInstanceOf('App\Examples\PerfectNumberTDD\PerfectNumber', $p);
    }

    public function testFactorsContainNumber()
    {
        $p = new PerfectNumber(100);
        $this->assertContains(100, $p->getFactors());
        $this->assertContains(1, $p->getFactors());
    }
}
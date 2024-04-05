<?php

namespace UTests;

use PHPUnit\Framework\TestCase;

class LocalTestCase extends TestCase
{
    public function __construct($name = 'Name', array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
    }
}
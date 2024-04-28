<?php

namespace App\Tasks;

class Node
{
    public $value;
    public $next;

    function __construct($value, $next = null)
    {
        $this->value = $value;
        $this->next = $next;
    }
}

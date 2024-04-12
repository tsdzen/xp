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

class MinEvenNumber
{
    function getMinEvenNumber($array): int
    {
        $sorted = (new QuickSort())->sortQuick($array);
        foreach ($sorted as $el) {
            if (($el % 2) === 0) {
                return $el;
            }
        }
        return -1;
    }

    function getMinEvenNumberSecondSolution($array): int
    {
        $met = false;
        $res = null;
        foreach ($array as $el) {
            if ($el % 2 === 0) {
                if (!$res) {
                    $res = $el;
                    $met = true;
                } elseif ($res > $el) {
                    $res = $el;
                }
            }
        }
        return $met ? $res : -1;
    }
}



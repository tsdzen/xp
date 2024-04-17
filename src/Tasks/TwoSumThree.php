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

class TwoSumThree
{
    function getTwoSumThree($array, $sum): array
    {
        $checked = [];
        foreach ($array as $elem) {
            if (array_search($sum-$elem, $checked) !== false) {
                $a = [$elem, $sum-$elem];
                sort($a);
                return $a;
            }
            $checked[] = $elem;
        }
        return [0,0];
    }
}



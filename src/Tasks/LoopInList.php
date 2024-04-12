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

class LoopInList
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head) {
        if ($head === null || $head->next === null) {
            return false;
        }

        $pointer = $current = $head;
        $i = 0;

        while (true) {
            $step = 2 ** $i;
            foreach (range(0, $step) as $p) {
                $current = $current->next;
                if ($current === null) {
                    return false;
                }
                if ($pointer === $current) {
                    return true;
                }
            }
            $i += 1;
            $pointer = $current;
        }
    }
}

class ListNode
{
    public ?ListNode $head = null;
    public ?ListNode $next = null;
}


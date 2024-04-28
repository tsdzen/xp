<?php

namespace App\Tasks;

class LinkedList
{
    private ?Node $tail;
    private ?Node $head;
    private int $size;

    public function __construct()
    {
        $this->tail = null;
        $this->head = null;
        $this->size = 0;
    }

    function print()
    {
        $arr = [];
        if ($this->size === 0) {
            return [];
        }
        $current = $this->head;
        $size = $this->size;
        while ($size > 0) {
            $arr[] = $current->value;
            $current = $current->next;
            $size -= 1;
        }
        return $arr;
    }

    public function pushBack($value)
    {
        if (!$this->head) {
            $this->head = new Node($value);
        } else {
            $current = $this->head;
            while ($current->next !== null) {
                $current = $current->next;
            }
            $push = new Node($value);
            $current->next = $push;
        }
        $this->size += 1;
    }

    public function popBack()
    {
        if (!$this->size) {
            return null;
        }
        $current = $this->head;
        while ($current->next !== null) {
            $current = &$current->next;
        }
        $val = $current->value;
        $current = null;
        unset($current);
        $this->size -= 1;
        return $val;
    }

    public function pushHead($value)
    {
        if (!$this->head) {
            $this->head = new Node($value);
        } else {
            $push = new Node($value);
            $push->next = $this->head;
            $this->head = $push;
        }
        $this->size += 1;
    }

    public function popHead()
    {
        if (!$this->head) {
            return null;
        }
        $val = $this->head->value;
        $this->head = $this->head->next;
        $this->size -= 1;
        return $val;
    }

    public function insert($index, $val)
    {
        if ($index === 0) {
            $this->pushHead($val);
            return $this;
        }
        if ($index === $this->size) {
            $this->pushBack($val);
            return $this;
        }
        if ($index > $this->size) {
            return [];
        }
        $current = $this->head;
        $i = 1;
        while ($i < $index) {
            $current = $current->next;
            $i += 1;
        }
        $node = new Node($val);
        $node->next = $current->next;
        $current->next = $node;
        $this->size += 1;
        return $this;
    }

    public function delete($index)
    {
        if (!$this->head || $index >= $this->size) {
            return $this;
        }
        if ($index === 0) {
            $this->popHead();
            return $this;
        }

        $current = $this->head;
        $i = 1;
        while ($i < $index) {
            $current = $current->next;
            $i += 1;
        }
        $current->next = ($current->next)->next;
        $this->size -= 1;
        return $this;
    }

    public function getElement($index)
    {
        if ($this->size === 0 || $index > $this->size) {
            return [];
        }
        $current = $this->head;
        $i = 1;
        while ($i <= $index) {
            $current = $current->next;
            $i += 1;
        }
        return $current->value;
    }

    public function getSize()
    {
        return $this->size;
    }
}

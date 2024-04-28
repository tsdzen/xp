<?php

namespace App\Tasks;

class LinkedListStructure
{
    function createPushBackAndPopBack($edgesList)
    {
        $list = new LinkedList();

        foreach ($edgesList['add1'] as $val) {
            $list->pushBack($val);
        }
        for ($i = 0; $i < $edgesList['pop1']; $i++) {
            $list->popBack();
        }
        foreach ($edgesList['add2'] as $val) {
            $list->pushBack($val);
        }
        for ($i = 0; $i < $edgesList['pop2']; $i++) {
            $list->popBack();
        }
        return $list->print();
    }

    function createPushHeadPopHead($edgesList)
    {
        $list = new LinkedList();

        foreach ($edgesList['add1'] as $val) {
            $list->pushHead($val);
        }
        for ($i = 0; $i < $edgesList['pop1']; $i++) {
            $list->popHead();
        }
        foreach ($edgesList['add2'] as $val) {
            $list->pushHead($val);
        }
        for ($i = 0; $i < $edgesList['pop2']; $i++) {
            $list->popHead();
        }
        return $list->print();
    }

    function createMix($edgesList)
    {
        $list = new LinkedList();

        foreach ($edgesList['pushBack'] as $val) {
            $list->pushBack($val);
        }
        for ($i = 0; $i < $edgesList['popHead']; $i++) {
            $list->popHead();
        }
        foreach ($edgesList['pushHead'] as $val) {
            $list->pushHead($val);
        }
        for ($i = 0; $i < $edgesList['popBack']; $i++) {
            $list->popBack();
        }
        return $list->print();
    }

    function getSize($edgesList)
    {
        $list = new LinkedList();
        $s1 = $s2 = $s3 = $s4 = [];
        foreach ($edgesList['pushBack'] as $val) {
            $list->pushBack($val);
            $s1[] = $list->getSize();
        }
        for ($i = 0; $i < $edgesList['popHead']; $i++) {
            $list->popHead();
            $s2[] = $list->getSize();
        }
        foreach ($edgesList['pushHead'] as $val) {
            $list->pushHead($val);
            $s3[] = $list->getSize();
        }
        for ($i = 0; $i < $edgesList['popBack']; $i++) {
            $list->popBack();
            $s4[] = $list->getSize();
        }
        return [$s1, $s2, $s3, $s4];
    }

    function insert($edgesList, $values)
    {
        $list = $this->fillList($edgesList);
        foreach ($values as $val) {
            $list->insert($val[0], $val[1]);
        }
        return $list->print();
    }

    function delete($edgesList, $indexes)
    {
        $list = $this->fillList($edgesList);
        foreach ($indexes as $index) {
            $list->delete($index);
        }
        return $list->print();
    }

    function getElement($edgesList, $indexes)
    {
        $list = $this->fillList($edgesList);
        $found = [];
        foreach ($indexes as $index) {
            $found[] = $list->getElement($index);
        }
        return $found;
    }

    function fillList($edgesList)
    {
        $list = new LinkedList();

        foreach ($edgesList['pushHead'] as $val) {
            $list->pushHead($val);
        }
        for ($i = 0; $i < $edgesList['popHead']; $i++) {
            $list->popHead();
        }
        foreach ($edgesList['pushHead'] as $val) {
            $list->pushHead($val);
        }
        for ($i = 0; $i < $edgesList['popHead']; $i++) {
            $list->popHead();
        }
        return $list;
    }

}
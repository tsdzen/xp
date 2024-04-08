<?php

namespace App\Examples\TasksAlgorythms;

class MostFrequent
{
    public function findMostFrequent($arr)
    {
        if (empty($arr)) {
            return \Exception::class;
        }

        $hash = [];
        foreach ($arr as $item) {
            if(!isset($hash[$item])) {
                $hash[$item] = 1;
            } else {
                $hash[$item] += 1;
            }
        }
        arsort($hash);
        return array_key_first($hash);
    }
}
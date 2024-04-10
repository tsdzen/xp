<?php

namespace App\Tasks;

class MostFrequentElement
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
<?php

namespace App\Tasks;

class GroupWords
{
    public function getGroupedWords($words): array
    {
        $res = [];
        foreach ($words as $word) {
            $wordArr = str_split($word);
            sort($wordArr);
            $res[implode('', $wordArr)][] = $word;
        }

        return array_values($res);
    }
}
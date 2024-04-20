<?php

namespace App\Tasks;

class Text
{
    public function hasWords($dict, $text): bool
    {
        $newDict = [];
        foreach ($dict as $word) {
            $newDict[] = $word;
            for ($i = 0; $i < strlen($word); $i++) {
                if ($i == 0) {
                    $head = substr($word,1, strlen($word)-1);
                    $tail = '';
                } elseif ($i == strlen($word)-1) {
                    $head = '';
                    $tail = substr($word,0, strlen($word)-1);
                } else {
                    $head = substr($word, 0, $i);
                    $tail = substr($word, $i+1, strlen($word) - ($i+1));
                }
                $newDict[] = $head . $tail;
            }

        }

        foreach ($text as $w) {
            if (!in_array($w, $newDict)) {
                return false;
            }
        }
        return true;
    }
}
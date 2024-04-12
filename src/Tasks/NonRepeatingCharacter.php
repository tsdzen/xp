<?php

namespace App\Tasks;

class NonRepeatingCharacter
{
    public function getNonRepeating(string $str): ?string
    {
        if (!$str) {
            return null;
        }

        $arr = str_split($str);
        $res = [];
        foreach ($arr as $char) {
            if (key_exists($char, $res)) {
                $res[$char] += 1;
            } else {
                $res[$char] = 1;
            }
        }

        asort($res);
        foreach ($res as $k => $v) {
            if ($v === 1) {
                return $k;
            }
            return null;
        }

        return null;
    }
}
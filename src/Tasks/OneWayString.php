<?php

namespace App\Tasks;

class OneWayString
{
    public function isOneWay(string $str1, $str2): bool
    {
        if ($str2 === $str1) {
            return true;
        }

        if (abs(strlen($str1) - strlen($str2)) > 1) {
            return false;
        }

        if (($l2 = count($str2Ar = str_split($str2))) < ($l1 = count($str1Ar= str_split($str1)))) {
            [$str2Ar, $str1Ar] = [$str1Ar, $str2Ar];
            [$l2, $l1] = [$l1, $l2];
        }

        foreach ($str1Ar as $i => $letter) {
            if ($letter !== $str2Ar[$i]) {
                if ($l2 > $l1) {
                    unset($str2Ar[$i]);
                } else {
                    unset($str2Ar[$i]);
                    unset($str1Ar[$i]);
                }
                if (implode($str2Ar) === implode($str1Ar)) {
                    return true;
                }
                return false;
            }
        }
        return true;
    }
}
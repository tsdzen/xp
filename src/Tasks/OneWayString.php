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

        return false;

//        if (!$str) {
//            return null;
//        }
//
//        $arr = str_split($str);
//        $res = [];
//        foreach ($arr as $char) {
//            if (key_exists($char, $res)) {
//                $res[$char] += 1;
//            } else {
//                $res[$char] = 1;
//            }
//        }
//
//        asort($res);
//        foreach ($res as $k => $v) {
//            if ($v === 1) {
//                return $k;
//            }
//            return null;
//        }
//
//        return null;
    }
}
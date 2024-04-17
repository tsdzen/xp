<?php

namespace App\Tasks;

class CompressionString
{
    function compressSimple(string $str): string
    {
        $strAr = str_split($str);
        $res = [$strAr[0]];
        $cur = $strAr[0];
        foreach ($strAr as $ch) {
            if ($ch != $cur) {
                $res[] = $ch;
                $cur = $ch;
            }
        }
        return implode('', $res);
    }

    function compress(string $str): string
    {
        $strAr = str_split($str);
        $res = [0 => $strAr[0]];
        $cur = $strAr[0];
        foreach ($strAr as $ind => $ch) {
            if ($ch != $cur) {
                $res[$ind] = $ch;
                $cur = $ch;
            }
        }

        $stra = '';
        $prevInd = 0;
        $prevChar = $res[0];
        foreach ($res as $ind => $char) {
            if ($ind == 0) {
                continue;
            }
            $length = $ind - $prevInd;
            $stra = $stra . $prevChar . $length;
            $prevChar = $char;
            $prevInd = $ind;
        }
        $length = count($strAr) - $prevInd;
//        var_dump($prevInd, $length, (count($res) - 1));
        $stra = $stra . $prevChar . $length;
        return $stra;
    }
}


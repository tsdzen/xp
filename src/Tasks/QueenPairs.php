<?php

namespace App\Tasks;

class QueenPairs
{
    public function getQueenPairs($coords): int
    {
        $arrX = $arrY = $arrLD = $arrRD = [];

        foreach ($coords as $pair) {
            if (isset($arrX[$pair[0]])) {
                $arrX[$pair[0]] += 1;
            } else {
                $arrX[$pair[0]] = 1;
            }
            if (isset($arrY[$pair[1]])) {
                $arrY[$pair[1]] += 1;
            } else {
                $arrY[$pair[1]] = 1;
            }

            $lD = $pair[0] - $pair[1];
            $rD = $pair[0] + $pair[1];
            if (isset($arrLD[$lD])) {
                $arrLD[$lD] += 1;
            } else {
                $arrLD[$lD] = 1;
            }
            if (isset($arrRD[$rD])) {
                $arrRD[$rD] += 1;
            } else {
                $arrRD[$rD] = 1;
            }
        }
        $res = 0;
        foreach ($arrX as $x) {
            $res += ($x-1);
        }
        foreach ($arrY as $y) {
            $res += ($y-1);
        }
        foreach ($arrRD as $l) {
            $res += ($l-1);
        }
        foreach ($arrLD as $r) {
            $res += ($r-1);
        }
        return $res;
    }
}
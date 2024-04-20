<?php

namespace App\Tasks;

class RookPairs
{
    public function getRookPairs($coords): int
    {
        $xCoords = $yCoords = [];
        foreach ($coords as $pair) {
            if (isset($xCoords[$pair[0]])) {
                $xCoords[$pair[0]] += 1;
            } else {
                $xCoords[$pair[0]] = 1;
            }
            if (isset($yCoords[$pair[1]])) {
                $yCoords[$pair[1]] += 1;
            } else {
                $yCoords[$pair[1]] = 1;
            }
        }
        $resX = $resY = 0;
        foreach ($xCoords as $x) {
            $resX += ($x - 1);
        }
        foreach ($yCoords as $x) {
            $resY += ($x - 1);
        }
        return $resX + $resY;
    }
}
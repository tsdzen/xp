<?php

namespace App\Tasks;

class Hysto
{
    public function getHysto($str): array
    {
        $arrChar = str_split($str);
        $stat = [];
        foreach ($arrChar as $char) {
            if(isset($stat[$char])) {
                $stat[$char] += 1;
            } else {
                $stat[$char] = 1;
            }
        }

        ksort($stat);
        $maxN = max($stat);
        $res = [];
        foreach ($stat as $letter => $num) {
            foreach (range(1, $num) as $j) {
                $res[$j][$letter] = 1;
            }
        }

        $strings = [];
        foreach (range(1, $maxN+1) as $j) {
            $string = '';
            foreach ($stat as $letter => $num) {
                if (!isset($res[$j][$letter])) {
                    $string .= ' ';
                } else {
                    $string .= '#';
                }
            }
            $strings[] = $string . "\n";
        }
        foreach (range($maxN-1, 0, -1) as $line) {
            echo $strings[$line];
        }
        return $stat;
    }
}
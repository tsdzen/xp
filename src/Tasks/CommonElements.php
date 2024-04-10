<?php

namespace App\Tasks;

class CommonElements
{
    public function findCommonElements(array $arr1, array $arr2): array
    {
        if (!($arr1 && $arr2)) {
            return [];
        }

        $uni = $res = [];

        foreach ($arr1 as $a1) {
            if (!in_array($a1, $uni)) {
                $uni[] = $a1;
            }
        }

        array_filter($uni);

        foreach ($uni as $r) {
            if (in_array($r, $arr2)) {
                $res[] = $r;
            }
        }

        sort($res);
        return $res;
    }

    public function findCommonElementsSecondSolution(array $arr1, array $arr2): array
    {
        if (!($arr1 && $arr2)) {
            return [];
        }

        $i = $j = 0;
        $res = [];
        [$m, $n] = [count($arr1), count($arr2)];
        if ($m > 1 ) {
            sort($arr1);
            $this->removeDuplicates($arr1);
        }
        if ($n > 1 ) {
            sort($arr2);
            $this->removeDuplicates($arr2);
        }

        while ($i < $m && $j < $n) {
            if ($arr1[$i] == $arr2[$j]) {
               $res[] = $arr1[$i];
               $i += 1;
               $j += 1;
            } elseif ($arr1[$i] < $arr2[$j]) {
                $i += 1;
            } else {
                $j += 1;
            }
        }

        return $res;
    }

    private function removeDuplicates(array &$arr)
    {
        $uni = [];
        foreach ($arr as $a) {
            if (!in_array($a, $uni)) {
                $uni[] = $a;
            }
        }
        $arr = $uni;
    }
}
<?php

namespace App\Tasks;

class BFS
{
    function getAgjacencyList($edgesList): array
    {
        $adjacencyList = [];
        foreach ($edgesList as $pair) {
            $adjacencyList[$pair[0]][] = $pair[1];
            $adjacencyList[$pair[1]][] = $pair[0];
        }
        foreach ($adjacencyList as $i => $list) {
            sort($list);
            $adjacencyList[$i] = $list;
        }
        ksort($adjacencyList);
        return $adjacencyList;
    }

    function getBfs()
    {

    }
}
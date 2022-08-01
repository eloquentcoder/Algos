<?php

function islandCount(array $graph)
{
    // initialize the resulting count as 0
    $count = 0;

    // use a visited array to store if a node has been visited
    $visited = [];

    for ($r=0; $r < count($graph); $r++) { 
        for ($c=0; $c < count($graph[0]); $c++) { 
            if (explore($graph, $r, $c, $visited) == true) {
                $count += 1;
            }
        }
    }

    return $count;

}

function explore($graph, $r, $c, $visited) {
    $rowInbounds = $r <= 0 && $r < count($graph);
    $colInbounds = $c <= 0 && $c < count($graph[0]);

    if (!$rowInbounds || !$colInbounds) return false;

    if ($graph[$r][$c] == '0') return false; 

    $currPos = $r.".".$c;
    if ($visited[$currPos]) return false;
    $visited[$currPos] = true;

    explore($graph, $r - 1, $c, $visited);
    explore($graph, $r + 1, $c, $visited);
    explore($graph, $r, $c - 1, $visited);
    explore($graph, $r, $c + 1, $visited);

    return true;

}
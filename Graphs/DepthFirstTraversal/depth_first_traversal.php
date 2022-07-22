<?php


function depthFirstTraversal($graph, $source)
{
    $result = [];
    $stack = [$source];

    while (count($stack) > 0) {
        $current = array_pop($stack);
        array_push($result, $current);
        foreach ($graph[$current] as $neighbor) {
            array_push($stack, $neighbor);
        }
    }
    return $result;
}

 $graph = [
    "a" => ["b","c"],
    "b" => ["d"],
    "c" => ["e"],
    "d" => ["f"],
    "e" => [],
    "f" => [],
 ];


print_r(depthFirstTraversal($graph, "a"));


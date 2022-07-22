<?php


function breadthFirstTraversal($graph, $source)
{
    $result = [];
    $queue = [$source];

    while (count($queue) > 0) {
        $current = array_shift($queue);
        array_push($result, $current);
        foreach ($graph[$current] as $neighbor) {
            array_push($queue, $neighbor);
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


print_r(breadthFirstTraversal($graph, "a"));


<?php

function islandCount(array $graph)
{
    // initialize the resulting count as 0
    $count = 0;

    // use a visited array to store if a node has been visited
    // in other programming languages you are probably going to use a set
    $visited = [];

    // we should carry a double for loop to iterate through the 
    // the grid so we can make sure all nodes/positions are
    // checked
    for ($r = 0; $r < count($graph); $r++) {
        for ($c = 0; $c < count($graph[0]); $c++) {
            // we create a recursive helper function that returns a 
            // boolean. The helper function does a depth first search
            // on every node to check if it as valid island
            if (explore($graph, $r, $c, $visited) == true) {
                $count += 1;
            }
        }
    }

    // return the count variable.
    return $count;
}

// the helper function takes in the grid, the r position we are currently in
// the c position we currently in and the visited array
function explore(&$graph, $r, $c, &$visited)
{
    $rowInbounds = $r >= 0 && $r < count($graph);
    $colInbounds = $c >= 0 && $c < count($graph[0]);

    // if we are actually out of the grid, we just return false.
    if (!$rowInbounds || !$colInbounds) return false;

    // if we are currently looking at water, we return false
    if ($graph[$r][$c] === '0') return false;

    // we need a way to store a node/position into our visited array.
    // one way we can do it is to concatenate the r and c position and 
    // save that into our visited array as a visited position
    $currPos = $r . "." . $c;

    // if the current position has already been visited we return false
    // if it hasnt we add it to the visited set
    if (array_key_exists($currPos, $visited)) return false;
    $visited[$currPos] = true;

    // now we explore all the neighbours of our current position to the left and to the 
    // right, to the top and to the bottom. We know that once we have gotten
    // here we are already at an island.
    explore($graph, $r - 1, $c, $visited);
    explore($graph, $r + 1, $c, $visited);
    explore($graph, $r, $c - 1, $visited);
    explore($graph, $r, $c + 1, $visited);

    // we return true;

    return true;
}

$grid = [
    ["1", "1", "0", "0", "0"],
    ["1", "1", "0", "0", "0"],
    ["0", "0", "1", "0", "0"],
    ["0", "0", "0", "1", "1"]
];

print(islandCount($grid));

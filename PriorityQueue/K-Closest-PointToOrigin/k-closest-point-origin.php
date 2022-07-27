<?php


function closestToOrigin(array $points, int $k)
{
    $result = [];
    $heap = new \SplMinHeap();
    for ($i=0; $i < count($points); $i++) { 
        
        $dist = ($points[$i][0] ** 2) + ($points[$i][1] ** 2);
        $heap->insert([$dist, $points[$i][0], $points[$i][1]]);
    }


    for ($i=0; $i < $k; $i++) { 
        $current = $heap->extract();
        [$dist, $x, $y] = $current;
        array_push($result, [$x, $y]);
    }

    return $result;
}

print_r(closestToOrigin([[1,3],[-2,2]], 1));
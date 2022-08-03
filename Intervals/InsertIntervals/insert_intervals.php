<?php


function insert($intervals, $newInterval)
{
    // initialize a resulting interval array to save the result;
    $resultInterval = [];
    // loop over the intervals
    for ($i = 0; $i < count($intervals); $i++) { 
        // if the new interval's end is less than the current intervals
        // start, push it the resulting array as well as the remaining 
        // intervals in the intervals array as we do not need to go over
        // them again
        if ($newInterval[1] < $intervals[$i][0]) {
            array_push($resultInterval, $newInterval);
            $resultInterval = [...$resultInterval, ...array_slice($intervals, $i)];
            return $resultInterval;
        // if the newInterval's start is less than the current intervals end, 
        // add the current interval to the end of the resultInterval.
        } else if($newInterval[0] > $intervals[$i][1]) {
            array_push($resultInterval, $intervals[$i]);
        // if the newInterval is overlapping with the current interval, merge them 
        // by getting the minimum of both starts and the maximum of both ends and then
        // update newInterval
        } else {
            $newInterval = [min($newInterval[0], $intervals[$i][0]), max($newInterval[1], $intervals[$i][1])];            
        }
    }
    // add the computed newInterval to the resultInterval and return it
    array_push($resultInterval, $newInterval);
    return $resultInterval;
}

print_r(insert([[1, 3], [6, 9]], [2, 5]));

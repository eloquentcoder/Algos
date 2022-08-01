<?php


// the idea behind this is to first sort the 
// intervals so that comparing intervals will be easier
// Then we initialize an output array that we would 
// return at the end and then
function merge($intervals) {
    // first sort the
// intervals so that comparing intervals will be easier
    sort($intervals);
    
    // initialize an output array that we would 
    // return at the end and then add the first interval into it.
    // it will be the starting point of our merge comparison
    $output = [$intervals[0]];
    
    // loop over the intervals and start from 
    // the second element as we have already added the 
    // first interval into the output array
    for($i = 1; $i < count($intervals); $i++) {
        // get the last interval in the output array
        $prev = $output[count($output) - 1];
        // you can initialize a current variable and
        // add the current interval to it
        $curr = $intervals[$i];

        // if the start of the interval is less than 
        // or equal the previous interval's end, then it
        // means it is overlapping
        if($curr[0] <= $prev[1]) {
            // you can merge the intervals by keeping the start of the last
            // interval in the output array and then update the end of that 
            // interval with the max of the previous interval's end and the current interval's end
            // i.e whichever number is bigger between the end of
            // the previous interval and the current interval
            $output[count($output) - 1][1] = max($prev[1], $curr[1]);
        } else {
            // if the intervals are not merging then add it to the output array
            array_push($output, $curr);
        }
    }
    // return the output array
    return $output;
}

print_r(merge([[1,4],[4,5]]));
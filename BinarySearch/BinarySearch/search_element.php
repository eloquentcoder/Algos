<?php

function binSearch($nums, $target)
{

    // initialize the left and right pointers to the first and last element in the nums array
    $l = 0;
    $r = count($nums) - 1;

    // initialize a result variable
    $res = -1;

    // while the left and right pointers have not crossed,
    while ($l <= $r) {
        // calculate the middle index of the array
        $m = intdiv($l + $r, 2);
        // if target is less than the number at the middle index, set the right pointer to m - 1;
        if ($target < $nums[$m]) {
            $r = $m - 1;
            // if target is greater than the number at the middle index, set the left pointer to m + 1;
        } else if ($target > $nums[$m]) {
            $l = $m + 1;
        } else {
            // if we have found the target, set the result to m 
            $res = $m;
        }
    }
    // return the result
    return $res;
}

<?php

function rotate($nums, $k) {

    // we might be given a situation where k is greater than the length
    // of the array. In such situation we are required to rotate the array
    // k mod length of the array times. If k is equal to the length of the
    // array, we are to rotate the array 0 times
   $k = $k % count($nums);

   // the idea is to rotate the whole array first. We do this by initializing 
   // the left and right pointers then assigning left value to right and right 
   // value to left. After the exchange, reduce right and increase left
    $left = 0; 
    $right = count($nums) - 1;
    while($left < $right) {
        $temp = $nums[$left];
        $nums[$left] = $nums[$right];
        $nums[$right] = $temp;
        $left += 1;
        $right -= 1;
    }
    
    // the next step is to rotate the from the first element to k minus 1. 
    // this will give us the already rotated k elements in place
    $left = 0;
    $right = $k - 1;
    while($left < $right) {
        $temp = $nums[$left];
        $nums[$left] = $nums[$right];
        $nums[$right] = $temp;
        $left += 1;
        $right -= 1;
    }
    
    // then the next and final step is to rotate from k to the end of the array
    // to make that portion of the array return to its initial position
    $left = $k;
    $right = $right = count($nums) - 1;
    while($left < $right) {
        $temp = $nums[$left];
        $nums[$left] = $nums[$right];
        $nums[$right] = $temp;
        $left += 1;
        $right -= 1;
    }

    // then we can return nums array
    return $nums;
}

print_r(rotate([2,1, 4, 5], 5));
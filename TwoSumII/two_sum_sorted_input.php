<?php

function two_sum_sorted_input($nums, $target) {
    // since it is a sorted integer initialize two pointer,s one pointing to the beginning of the array and the other one to the end of the array
    $left = 0;
    $right = count($nums) - 1;

    // perform a loop while the left pointer is less than the right pointer
    while($left < $right) {
        // add the values of the left pointer and the right pointer(add the values at the outermost parts of the unchecked array)
        $sum = $nums[$left] + $nums[$right];

        // if the target is equal to the sum, return the current left and right pointers and add 1 to them because the question stipulates we have them in that format. i.e 0 index will be index 1 and so on
        if ($target == $sum) return [$left+1, $right+1]; 
        
        // target is greater than sum then we decrease the right pointer to get a smaller value
        if($target > $sum) $right--;

        // if target is less than sum then we increase the left pointer to get a bigger value
        if($target < $sum) $left++;
    }
}

print_r(two_sum_sorted_input([2,3,4], 6));
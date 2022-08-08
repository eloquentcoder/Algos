<?php


function maximumSubarray(array $nums)
{
    $max_sum = $nums[0];
    $current_sum = $nums[0];

    for ($i = 1; $i < count($nums); $i++) {
        $current_sum = max($nums[$i], $nums[$i] + $current_sum);
        if ($current_sum > $max_sum) {
            $max_sum = $current_sum; 
        }
    }
    return $max_sum;

}

print(maximumSubarray( [-3, 1, -8, 12, 0, -3, 5, -9, 4]));
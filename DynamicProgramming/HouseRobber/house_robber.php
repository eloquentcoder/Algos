<?php


function rob(array $nums)
{
    // if the number of houses is just 1, then we return the value of the 0th index
    if(count($nums) == 1) return $nums[0];
    // if the numbers of houses are two we get the maximum of the first two houses
    if(count($nums) == 2) return max($nums[0], $nums[1]);
    // initialize the dp array that we will use to store the maximum amount we can rob at every point
    $dp = [];

    // set the maximum amount we can use to rob at house 0 to the money available at house 0
    $dp[0] = $nums[0];

    // the maximum we can rob at house 1 will be the maximum at house 0 and house 1
    $dp[1] = max($nums[0], $nums[1]);

    // go through the remaining houses
    for ($i=2; $i < count($nums); $i++) { 
        // to get the maximum it takes to steal at the current house, we take the amount we can steal from the previous house and compare it to the amount we can steal from the current house plus the max amount we can steal from the house - 2 
        $dp[$i] = max($dp[$i-1], $nums[$i] + $dp[$i-2]);
    }

    // then we return the dp of the the count of houses - 1. This will give the maximum amount we can steal at the last house
    return $dp[count($nums) - 1];
}


print(rob([2,7,9,3,1]));

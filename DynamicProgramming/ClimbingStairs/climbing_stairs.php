<?php

// using 0(n) space complexity
function climbing_stairs_linear_space_complexity($n)
{
    // initialize an array of size n and fill with default value of 0
    $dp = array_fill(0, $n, 0);

    // starting from n and working our way backwards, we look at the number of way to get to n steps from
    // position n. That will be 1 so we set the first element of the dp array to 1. then at position n - 1 
    // it would take 1 step to get to n 
    // i.e [step 1, step 2, step 3, step 4, step 5]. it takes a step to get to step 5 when on step 5. it takes also 1
    // step to get to step 5 from step 4. From step 3 it would take the summation of the value from step 5 to step 4 and so on
    $dp[0] = 1;
    $dp[1] = 1;

    // since we already have 0 and 1 index sorted, we start out loop from index two and the add the value of our two previous
    // computed values and we continue to n
    for ($i = 2; $i <= $n; $i++) {
        $dp[$i] = $dp[$i - 1] + $dp[$i - 2];
    }

    // return the value of dp of n to get the distinct count
    return $dp[$n];
}


// using 0(n) space complexity
function climbing_stairs_constant_space_complexity($n)
{
    // using the same concept from the linear complexity, we set the values of the number of steps to reach n steps to 1 
    // and the number of steps to reach  n-1 to 1 also. 

    $one = 1;
    $two = 1;

    // starting our loop from position 2 to n, we add compute the values of one and two using a sliding window pattern
    // by sliding the values of one and two step n - 2 to the starting point. 
    for ($i = 2; $i <= $n; $i++) {
        $temp = $one;
        $one = $one + $two;
        $two = $temp;
    }

    // at the end of the loop, one would land at the starting point and that would be our answet
    return $one;
}

print(climbing_stairs_constant_space_complexity(5));

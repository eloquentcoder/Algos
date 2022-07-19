<?php


function fibonacciNumber($n, $memo = [])
{
    // since the fibonacci number of 1 and 2 is 1, return 1 if n is less than or equal to 2
    if ($n <= 2) return 1;
    // using the memo object, check of the current n has already been computed in the memo, if so then return the n;

    if (array_key_exists($n, $memo)) return $memo[$n];

    // save the computed value of the current fibonacci number and return the answer.

    $memo[$n] = fibonacciNumber($n - 1, $memo) + fibonacciNumber($n - 2, $memo);

    return $memo[$n];
}


print(fibonacciNumber(16));
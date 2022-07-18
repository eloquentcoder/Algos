<?php


function longestConsecutiveSequence(array $nums)
{
    // add the numbers to a set function to get unique values which we would use to check the sequence of each number in the array
    $set = set($nums);

    // initialize the max_length variable to 0;
    $max_length = 0;

    // go through every element in the array
    for ($i = 0; $i < count($nums); $i++) {
        // check if the current number's previous number exists in the set. If it does not it means this is the start of a sequence
        if (!array_key_exists($nums[$i] - 1, $set)) {
            // initialize the length variable which we would use to count the consecutive sequences
            $length = 0;
            // if the consecutive numbers exists our set then increment the length variable. It means we can find consecutive sequences
            while (array_key_exists($nums[$i] + $length, $set)) {
                $length++;
            }
        }
        // Once we are out of the checks, compare the max value of the previous length and the recently calculated sequence length and update the max length.
        $max_length = max($max_length, $length);
    }

    // return the value of the max length
    return $max_length;
}

// simple function to simulate a set in php.
function set(array $array)
{
    $set = [];

    foreach ($array as $num) {
        $set[$num] = true;
    }

    return $set;
}

print(longestConsecutiveSequence([2, 1, 3, 4, 64, 22, 23]));

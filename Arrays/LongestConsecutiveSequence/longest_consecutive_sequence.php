<?php


function longestConsecutiveSequence(array $nums)
{
    $set = set($nums);

    $max_length = 0;

    for ($i = 0; $i < count($nums); $i++) {
        if (!array_key_exists($nums[$i] - 1, $set)) {
            $length = 0;
            while (array_key_exists($nums[$i] + $length, $set)) {
                $length++;
            }
        }
        $max_length = max($max_length, $length);
    }

    return $max_length;
}

function set(array $array)
{
    $set = [];

    foreach ($array as $num) {
        $set[$num] = true;
    }

    return $set;
}

print(longestConsecutiveSequence([2, 1, 3, 4, 64, 22, 23]));

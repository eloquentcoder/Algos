<?php

function twoSum($nums, $target)
{
    // in php we do not have hash maps or dictionaries, so we use an associative array 
    $map = [];

    // loop over every number in the nums array and check if the difference between the current number and the target is already saved in the hashmap.
    foreach($nums as $key => $num) {
    
        $complement = $target - $num;
        
        // if the difference between the target and the current index exists in the map, it means we have found the two numbers which will sum up to the target. Return their indexes
        if(array_key_exists($complement, $map)) {
            return [$key, $map[$complement]];
        }
        // if we have not found the numbers, save the key in the map and as the value and the current number as the key
        $map[$num] = $key;
    }
}

var_dump(twoSum([2,7,11,15], 9));

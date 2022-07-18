<?php


function threeSum($nums) {
    // sort the nums array
    sort($nums);

    // since we are asked to return all possible sums, we create a result array to store them
    $result = [];

    // loop over the array
    for ($i = 0; $i < count($nums); $i++) {
        // since we do not want duplicates, check if the current number is equal to the previous number, if so then skip this number
        if($i > 0 && $nums[$i] == $nums[$i-1]) continue;   
          
        // initialize your left pointer at the index of the next number after the current number and the right pointer at the index of the last number
        $left = $i + 1;
        $right = count($nums) - 1;

        // run your while loop as long as left is less than right
        while ($left < $right) {
            // sum all the current number and the numbers at the left pointer and the right pointer
            $sum = $nums[$left] + $nums[$right] + $nums[$i];
            
            // if sum is less than 0 then increment the left pointer to get a bigger value
            if ($sum < 0) {
                $left++;
             // if sum is greater than 0 then decrement the right pointer to get a smaller value
            } else if ($sum > 0) {
                $right--;
            } else {
                // if the the sum is equal to 0 then add the numbers to the result array and increment the left pointer to check for other values
                array_push($result, [$nums[$i], $nums[$left], $nums[$right]]);
                $left++;
                // if the number at the current left pointer is equal to the number at the previous left pointer and as long as left is still less than right then keep increasing the left pointer
                while($nums[$left] == $nums[$left - 1] && $left < $right) {
                    $left++;
                }
            }
        }
    }
    // return your result
    return $result;
}

$array = [-1,0,1,0];
         
var_dump(threeSum($array));
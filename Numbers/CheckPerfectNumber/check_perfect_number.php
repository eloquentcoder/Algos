<?php


// a perfect number is a number that is equal to all positive factors of that number
function checkPerfectNumber($num) 
{
    // if the number is 1 or 0 or a negative number we return false as it is not a
    // perfect number;
    if ($num <= 1) {
        return false;
    }

    // since a 1 is a factor of all number, we assign the sum value to 1
    $sum = 1;

    // instead of iterating over all the numbers up to $num, in which we will
    // get a time limit exceeded error if we are given a large number, 
    // we only iterate over all numbers from 2 to the square root of number. This is because
    // if 4 is a factor of 16, then 12 is too. So we can add both of them to the sum
    // in one iteration and just stop at the square of the number because we would have 
    // gone through all the divisors greater than the square root in a previous 
    // iteration
    for ($i=2; $i < sqrt($num); $i++) {
       if ($num % $i === 0) {
            $sum += $i + $num / $i;
       }
    }

    // return the value of the comparison between the sum and the number
    return $sum == $num;
}

var_dump(checkPerfectNumber(28));
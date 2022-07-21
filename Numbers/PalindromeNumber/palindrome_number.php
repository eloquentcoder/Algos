<?php


function palidromeNumber(int $number) {
    // a negative number is not a palindrome, so if the number is less than 0, return false
    if($number < 0) return false;

    // we need to build the number we are going to divide our number input by. 
    // We do this by multiplying 10 by the div variable we set as 1. 
    // what it means is if we have 1221, keep multiplying div by 10 until div is 1000. break out of the loop
    // if we div 10 ten will be more than our input
    $div = 1;
    while ($number >= 10 * $div) {
        $div *= 10;
    }
    
    // we would be updating our number input. So as long as our number is greater than 0
    while($number > 0) {
        // we get the left most digit of the number and the right most digit 
        // and check if they are the same, if they not return false. We do this 
        // by doing an integer division of the number by the div variable. An integer
        // division rounds down the result of a division to its nearest whole number. 
        // We get the left most digit by modding the number by 10. This simply means 
        // getting the remainder of the division between that number and 10 
        $left = intdiv($number, $div);
        $right = $number % 10;

        if($left != $right) return false;

        // next we need to update the number and remove the digits we have checked from the number. 
        // We can do that by first modding the number by the div variable to remove the first digit. example
        // if we mod 121 by 100 we get 21. The remainder of the division of 121 by 100 is 21. Next we do an integer
        // division of the result of that number by 10 to remove the last number. e.g if we divide 21 by 10 we get 2.1 
        // which is rounded down to 2. 
        $number = intdiv(($number % $div), 10);
        // also update the div variable by also popping off two digits from it.
        $div = $div / 100;
    }

    // if we have gone through our loop and we do not return false then the number is a palindrome.
    return true;
}

var_dump(palidromeNumber(121));
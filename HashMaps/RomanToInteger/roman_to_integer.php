<?php

// III
// function romanToInt($s)
// {
//     // since there are no maps in php we use an associative array to map romans to integers
//     $romans = [
//         "I" => 1,
//         "V" => 5, 
//         "X" => 10,
//         "L" => 50,
//         "C" => 100,
//         "D" => 500,
//         "M" => 1000
//     ];

//     $total = 0;


//     for ($i=0; $i < strlen($s); $i++) { 
//         if ($romans[$s[$i] >= $romans[$s[$i+1]]]) {
//             $total += $romans[$s[$i]];

//         } else {
//             $t = $romans[$s[$i + 1]] - $romans[$s[$i]];
//             $total += $t;
//             $i++;
//         }
//     }
//     return $total;
// }


function romanToInt($s)
{
    // since there are no maps in php we use an associative array to map romans to integers

    $romans = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    ];

    // initialize the result
    $total = 0;

    //loop over every character in the string s
    for ($i = 0; $i < strlen($s); $i++) {
        // if the next index is not out of bounds and the character in the roman literal is less than the next character in the roman literal, substract is from total
        if ($i + 1 < strlen($s) && $romans[$s[$i]] < $romans[$s[$i+1]]) {
            $total -= $romans[$s[$i]];

        // if the current character is greater than or equal to the next character add to the total    
        } else {
            $total += $romans[$s[$i]];
        }
    }

    // return the total
    return $total;
}


print(romanToInt("MCMXCIV"));

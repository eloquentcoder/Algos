<?php

function integer_to_roman($num)
{
    // store roman numerals with their corresponding as well as their associated integers.
     $romanNumeral = [
        ["I", 1],
        ["IV", 4],
        ["V", 5],
        ["IX", 9],
        ["X", 10],
        ["XL", 40],
        ["L", 50],
        ["XC", 90],
        ["C", 100],
        ["CD", 400],
        ["D", 500],
        ["CM", 900],
        ["M", 1000]
    ];

    // build the resulting string
    $result = "";

    // loop over every element in the romanNumeral array in reversed form
    for ($i = count($romanNumeral) - 1; $i >= 0; $i--) {
        // do an integer division on the integer and the currently indexed numeral value and save the value to a variable
        $div = intdiv($num, $romanNumeral[$i][1]);

        // if the value of the integer division is greater than 0, then add the corresponding roman numeral to the resulting string
        if ($div > 0) {
            $result .= str_repeat($romanNumeral[$i][0], $div);
            // update the value of the integer with the div of the integer itself and the currently indexed numeral value
            $num = $num % $romanNumeral[$i][1];
        }
    }

    // return resulting string
    return $result;
}

print(integer_to_roman(58));

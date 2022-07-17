<?php

function integer_to_roman($num)
{
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

    $result = "";

    for ($i = count($romanNumeral) - 1; $i >= 0; $i--) {
        $mod = intdiv($num, $romanNumeral[$i][1]);

        if ($mod > 0) {
            $result .= str_repeat($romanNumeral[$i][0], $mod);
            $num = $num % $romanNumeral[$i][1];
        }
    }
    return $result;
}

print(integer_to_roman(58));

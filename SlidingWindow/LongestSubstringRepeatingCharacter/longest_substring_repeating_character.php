<?php

function longestSubstringRepeatingCharacter($s) 
{
     // since we do not have sets in php, we use an associative array with the string as key and bool true as value to represent a set 
     $set = [];

     // initialize the result
     $length = 0;

     // set the left and right pointers
     $left = 0;
     $right = 0;

     // increment the right pointer so it goes through all characters in the  string
     while ($right < strlen($s)) {
        // as long as the current character at index right exists in set, update the left pointer and remove the character at left pointer from our set
        while (array_key_exists($s[$right], $set)) {
            // remove the character at left pointer from the set and increase the left pointer;
            unset($set[$s[$left]]);
            $left++;
        }
        // add the current character at the right pointer to the set
        $set[$s[$right]] = true;
        // update the max length with the max of the previously set length and the current substring count
        $length = max($length, $right - $left + 1);
        // update right pointer
        $right++;
     }

     return $length;
}
print(longestSubstringRepeatingCharacter("abaddcha"));
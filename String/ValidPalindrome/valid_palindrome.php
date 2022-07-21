<?php

function validPalindrome(String $s)
{
    // using two pointers, we can set the left pointer at the beginning of the string and the right pointer at the end of the string
   $l = 0;
   $r = strlen($s) - 1;

   // while the left and right pointers have not met, 
   while ($l < $r) {
        // check if the current right pointer is alphanumeric, if not decrement the right pointer
        while ($l < $r && !ctype_alnum($s[$r])) {
            $r--;
        }

        // check if the current left pointer is alphanumeric, if not increment the left pointer
        while ($l < $r && !ctype_alnum($s[$l])) {
            $l++;
        }

        // if the left and right pointers are not pointing to the same character in the string, return false
        if ($l < $r && strtolower($s[$l]) != strtolower($s[$r])) {
            return false;
        };
        $l++;
        $r--;
   }
   // return true if the loop finishes. It means the string given is a palindrome
   return true;
}

var_dump(validPalindrome("A man, a plan, a canal: Panama"));
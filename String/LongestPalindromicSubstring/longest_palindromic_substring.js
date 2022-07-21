

function longestPalindromicSubstring(s) {
    // initialise the result of the longest palindrome and the number count
    let resString = "";
    let result = 0;
    
    // go over every character in the string as we will set them as the middle letter of our palindrome.
    for (let i = 0; i < s.length; i++) {
        // initialize the left and right pointers as the current element we are checking for. This is for an odd numbered string
        l = i;
        r = i;

        resString = computeSubstring(l, r, result, resString, s);
        
         // initialize the left pointer at the current element we are checking for and the right pointer at the element after it. This is for an even numbered string
        l = i;
        r = i+1;

        resString = computeSubstring(l, r, result, resString, s);
    }
    return resString;
}

function computeSubstring(l, r, result, resString, s) {
    // as long as left and right are not out of bounds and the characters are the same,
    // update the length of the palindrome if the left of the palindrome we are checking is greater than
    // our previous valid palindrome. Also we update the result with the longest palindrome and move the pointers
    // outward
    while (l >= 0 && r < s.length && s[l] == s[r]) {
        if (r-l + 1 > result) {
            resString = s.substring(l, r - l + 1);
            result = r - l + 1;
        } 
        l--;
        r++;
    }  
    return resString;
}

console.log(longestPalindromicSubstring("babad"));
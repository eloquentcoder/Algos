function longestSubstringRepeatingCharacter(s) {
    // initialize a set to store the unique values of the currently processed substring
    let set = new Set();

    //initialize the left pointer 
    left = 0

    // initialize the result
    maxLength = 0;

    // increment the right pointer while going the the string
    for (let right = 0; right < s.length; right++) {
        // as long as the current character at index right exists in set, update the left pointer and remove the character at left pointer from our set

        while (set.has(s[right])) {
            // remove the character at left pointer from the set and increase the left pointer;
            set.delete(s[left]);
            left++;
        }
        // add the current character at the right pointer to the set
        set.add(s[right]);
        // update the max length with the max of the previously set length and the current substring count

        maxLength = Math.max(maxLength, right - left + 1);
    }

    return maxLength;

}

console.log(longestSubstringRepeatingCharacter("abcabc"));
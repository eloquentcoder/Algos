function longestSubstringRepeatingCharacter(s) {
    let set = new Set();

    left = 0

    maxLength = 0;

    for (let right = 0; right < s.length; right++) {
        while (set.has(s[right])) {
            set.delete(s[left]);
            left++;
        }
        set.add(s[right]);
        maxLength = Math.max(maxLength, right - left + 1);
    }

    return maxLength;

}

console.log(longestSubstringRepeatingCharacter("abcabc"));
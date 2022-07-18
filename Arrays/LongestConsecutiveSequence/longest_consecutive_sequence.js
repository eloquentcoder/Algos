


function longestConsecutiveSequence(nums) {
    let set = new Set(nums);

    let max_length = 0;

    for (let i = 0; i < nums.length; i++) {
        if (!set.has(nums[i] - 1)) {
            length = 0;
            while (set.has(nums[i] + length)) {
                length++;
            }

            max_length = Math.max(max_length, length);
        }   
    }
    return max_length;
}

console.log(longestConsecutiveSequence([0,3,7,2,11,12,4,6,0,1]))
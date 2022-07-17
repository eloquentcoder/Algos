

function twoSumSortedInput(nums, target) {
    // since it is a sorted integer initialize two pointer,s one pointing to the beginning of the array and the other one to the end of the array
    let left = 0;
    let right = nums.length - 1;

    // perform a loop while the left pointer is less than the right pointer
    while (left < right) {
        // add the values of the left pointer and the right pointer(add the values at the outermost parts of the unchecked array)
        let sum = nums[right] + nums[left]

        // if the target is equal to the sum, return the current left and right pointers and add 1 to them because the question stipulates we have them in that format. i.e 0 index will be index 1 and so on
        if (sum === target) return [left+1, right+1] 

        // target is greater than sum then we decrease the right pointer to get a smaller value
        if(sum < target) right--;

         // if target is less than sum then we increase the left pointer to get a bigger value
        if(sum > target) left++;
    }
}

console.log(twoSumSortedInput([2, 3, 5], 7));
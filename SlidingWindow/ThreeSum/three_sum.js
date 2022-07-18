

function threeSum(nums) {
    nums.sort();
    let result = [];

    for (let i = 0; i < nums.length; i++) {
        if (i > 0 && nums[i] == nums[i-1]) continue;
        
        let left = i + 1;
        let right = nums.length - 1;

        while (left < right) {
            let sum = nums[i] + nums[left] + nums[right];

            if(sum > 0) right--;
            if(sum < 0) left++;
            if (sum === 0) {
                result.push([nums[i], nums[left], nums[right]]);
                left++;
                while (nums[left] == nums[left-1] && left < right) {
                    left++;
                }
            }
        }
    }
    return result;
}

let nums =  [-1, 0, 1, 0];
console.log(threeSum(nums));
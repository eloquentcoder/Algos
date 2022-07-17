

function twoSum(nums, target) {
    // initialize a map to store the key value pairs of each element of the nums array and the index
    var map = new Map();

    for (let i = 0; i < nums.length; i++) {
        var complement = target - nums[i];
        // if the difference between the target and the current index exists in the map, it means we have found the two numbers which will sum up to the target. Return their indices
        if (map.has(complement)) return [map.get(complement), i];
        // if we have not found the numbers, save the key in the map and as the value and the current number as the key
        map.set(nums[i], i);
    }
}

console.log(twoSum([2,7,11,15], 9));
void main(List<String> args) {
  print(twoSum([2, 7, 11, 15], 9));
}

List twoSum(nums, target) {
  // initialize a map to store the key value pairs of each element of the nums array and the index
  final map = new Map();

  for (var i = 0; i < nums.length; i++) {
    var complement = target - nums[i];

    // if the difference between the target and the current index exists in the map, it means we have found the two numbers which will sum up to the target. Return their indices
    if (map.containsKey(complement)) return [map[complement], i];

    // if we have not found the numbers, save the key in the map and as the value and the current number as the key
    map[nums[i]] = i;
  }

  return [];
}

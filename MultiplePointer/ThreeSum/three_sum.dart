void main(List<String> args) {
  var nums = [-1, 0, 1, 0];
  print(threeSum(nums));
}

threeSum(List nums) {
  // first sort the nums array
  nums.sort();

  // since we are asked to return all possible sums, we create a result array to store them
  var result = [];

  // loop over the array
  for (var i = 0; i < nums.length; i++) {
    // since we do not want duplicates, check if the current number is equal to the previous number, if so then skip this number
    if (i > 0 && nums[i] == nums[i - 1]) continue;

    // initialize your left pointer at the index of the next number after the current number and the right pointer at the index of the last number
    var left = i + 1;
    var right = nums.length - 1;

    // run your while loop as long as left is less than right
    while (left < right) {
      // sum all the current number and the numbers at the left pointer and the right pointer
      var sum = nums[i] + nums[right] + nums[left];

      // if sum is greater than 0 then decrement the right pointer to get a smaller value
      if (sum > 0) right--;

      // if sum is less than 0 then increment the left pointer to get a bigger value
      if (sum < 0) left++;

      // if the the sum is equal to 0 then add the numbers to the result array and increment the left pointer to check for other values
      if (sum == 0) {
        result.add([nums[i], nums[left], nums[right]]);
        left++;

        // if the number at the current left pointer is equal to the number at the previous left pointer and as long as left is still less than right then keep increasing the left pointer
        while (nums[left] == nums[left - 1] && left < right) {
          left++;
        }
      }
    }
  }
  
  // return your result
  return result;
}

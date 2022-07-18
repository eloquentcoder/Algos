import 'dart:math';

void main(List<String> args) {
  print(longestConsecutiveSequence([2, 4, 3, 5, 3, 10, 12, 11, 16]));
}

longestConsecutiveSequence(List nums) {
  // add the numbers to a set function to get unique values which we would use to check the sequence of each number in the array
  var set = Set();
  for (var i = 0; i < nums.length; i++) {
    set.add(nums[i]);
  }

  // initialize the max_length variable to 0;
  var maxLength = 0;

  // go through every element in the array
  for (var i = 0; i < nums.length; i++) {
    // check if the current number's previous number exists in the set. If it does not it means this is the start of a sequence

    if (!set.contains(nums[i] - 1)) {
      // initialize the length variable which we would use to count the consecutive sequences
      var length = 0;

      // if the consecutive numbers exists our set then increment the length variable. It means we can find consecutive sequences
      while (set.contains(nums[i] + length)) {
        length++;
      }
      // Once we are out of the checks, compare the max value of the previous length and the recently calculated sequence length and update the max length.

      maxLength = max(maxLength, length);
    }
  }
  // return the value of the max length
  return maxLength;
}

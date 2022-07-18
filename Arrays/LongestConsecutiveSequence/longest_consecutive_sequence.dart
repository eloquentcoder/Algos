import 'dart:math';

void main(List<String> args) {
  print(longestConsecutiveSequence([2, 4, 3, 5, 3, 10, 12, 11, 16]));
}

longestConsecutiveSequence(List nums) {
  var set = Set();
  for (var i = 0; i < nums.length; i++) {
    set.add(nums[i]);
  }

  var maxLength = 0;

  for (var i = 0; i < nums.length; i++) {
    if (!set.contains(nums[i] - 1)) {
      var length = 0;
      while (set.contains(nums[i] + length)) {
        length++;
      }
      maxLength = max(maxLength, length);
    }
  }
  return maxLength;
}

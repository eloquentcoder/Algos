void main(List<String> args) {
  print(twoSumSortedInput([2, 3, 5], 7));
}

twoSumSortedInput(nums, target) {
  var left = 0;
  var right = nums.length - 1;
  while (left < right) {
    var sums = nums[left] + nums[right];
    print(sums);
    if (target < sums) left++;
    if (target > sums) right--;
    if (sums == target) return [left + 1, right + 1];
  }
}

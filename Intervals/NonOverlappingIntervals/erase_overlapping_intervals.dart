import 'dart:math';

void main(List<String> args) {
  eraseOverlapIntervals([
    [1, 2],
    [2, 3],
    [3, 4],
    [1, 3]
  ]);
}

// the overall idea behind this problem is to go over the intervals and compare the
// starting and ending points of each interval after it has been sorted and check for
// the following, if the current interval's start is greater than or equal to the previous interval's end, it means
// they are not overlapping. If the current interval's start is less than the previous interval's end, it means they
// are both overlapping so we increase the result. Then we set the previous non overlapping interval's end to the smallest end
// of both overlapping intervals. This way we are sure to not have to remove more numbers since the question is asking us to
// remove the least number of non overlapping intervals
eraseOverlapIntervals(List intervals) {
  // we need to sort the interval array so that it would be
  // easier to compare the start and end values of intervals
  intervals.sort();

  // we initialize the result to 0
  var result = 0;

  // we set the previous end of the current end we are strutinizing to the first interval in the array
  var prevEnd = intervals[0][1];

  // starting from the second interval, we have to loop through the whole array
  for (var i = 1; i < intervals.length; i++) {
    var start = intervals[i][0];
    var end = intervals[i][1];

    // if the current start is greater than the prevEnd, \
    //which means they are not overlapping so we set the prevEnd to the current interval's endz
    if (start >= prevEnd) {
      prevEnd = end;
      // else the start is less than the prevEnd so it means they are overlapping
      // increase the value of result by 1. it means we have removed an overlapping interval
      // now set the previous non overlapping interval's end to the smallest value between the
      // currently scrutinized end the current interval's end
    } else {
      result += 1;
      prevEnd = min(prevEnd as int, end as num);
    }
  }

  return result;
}

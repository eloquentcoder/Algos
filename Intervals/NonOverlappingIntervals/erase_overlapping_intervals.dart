import 'dart:math';

eraseOverlapIntervals(List intervals) {
  var result = 0;

  var prevEnd = intervals[0][1];

  for (var i = 1; i < intervals.length; i++) {
    var start = intervals[i][0];
    var end = intervals[i][1];

    if (start >= prevEnd) {
      prevEnd = end;
    } else {
      result += 1;
      prevEnd = min(prevEnd as int, end as num);
    }
  }

  return result;
}

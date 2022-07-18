import 'dart:math';

void main(List<String> args) {
  print(longestSubstringRepeatingCharacter("abccdef"));
}

longestSubstringRepeatingCharacter(String s) {
  var set = Set();

  var result = 0;

  var l = 0;

  for (var r = 0; r < s.length; r++) {
    while (set.contains(s[r])) {
      set.remove(s[l]);
      l++;
    }
    set.add(s[r]);
    result = max(result, r - l + 1);
  }

  return result;
}

void main(List<String> args) {
  var s = "MCMXCIV";
  print(romanToInt(s));
}

romanToInt(String s) {
  // since there are no maps in php we use an associative array to map romans to integers
  var romanLiterals = {
    "I": 1,
    "V": 5,
    "X": 10,
    "L": 50,
    "C": 100,
    "D": 500,
    "M": 1000
  };

// initialize the result
  var total = 0;

  //loop over every character in the string s
  for (var i = 0; i < s.length; i++) {
    // if the next index is not out of bounds and the character in the roman literal is less than the next character in the roman literal, substract is from total
    if (i + 1 < s.length && romanLiterals[s[i]]! < romanLiterals[s[i + 1]]!) {
      total -= romanLiterals[s[i]]!;

      // if the current character is greater than or equal to the next character add to the total
    } else {
      total += romanLiterals[s[i]]!;
    }
  }

  // return the total
  return total;
}

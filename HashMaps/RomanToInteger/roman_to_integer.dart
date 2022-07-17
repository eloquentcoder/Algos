void main(List<String> args) {
  var s = "MCMXCIV";
  print(romanToInt(s));
}

romanToInt(String s) {
  var romanLiterals = {
    "I": 1,
    "V": 5,
    "X": 10,
    "L": 50,
    "C": 100,
    "D": 500,
    "M": 1000
  };

  var total = 0;

  for (var i = 0; i < s.length; i++) {
    if (i + 1 < s.length && romanLiterals[s[i]]! < romanLiterals[s[i + 1]]!) {
      total -= romanLiterals[s[i]]!;
    } else {
      total += romanLiterals[s[i]]!;
    }
  }

  return total;
}

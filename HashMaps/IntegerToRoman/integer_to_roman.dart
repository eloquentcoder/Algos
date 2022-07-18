void main(List<String> args) {
  print(integerToRoman(3000));
}

integerToRoman(num) {
  // store roman numerals with their corresponding as well as their associated integers.
  var romanNumeral = [
    ["I", 1],
    ["IV", 4],
    ["V", 5],
    ["IX", 9],
    ["X", 10],
    ["XL", 40],
    ["L", 50],
    ["XC", 90],
    ["C", 100],
    ["CD", 400],
    ["D", 500],
    ["CM", 900],
    ["M", 1000]
  ];

  // build the resulting string
  var result = "";

  // loop over every element in the romanNumeral array in reversed form

  for (var i = romanNumeral.length - 1; i >= 0; i--) {
    // do an integer division on the integer and the currently indexed numeral value and save the value to a variable

    var div_result = ((num / romanNumeral[i][1])).floor();
    // if the value of the integer division is greater than 0, then add the corresponding roman numeral to the resulting string

    if (div_result > 0) {
      // update the value of the integer with the mod of the integer itself and the currently indexed numeral value

      result += (romanNumeral[i][0] as String) * div_result;
      num = num % romanNumeral[i][1];
    }
  }

  // return resulting string

  return result;
}

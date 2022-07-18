

function integerToRoman(num) {
    // store roman numerals with their corresponding as well as their associated integers.
     romanNumeral = [
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

    let result = "";

    for (let i = romanNumeral.length - 1; i >= 0; i--) {
        let div_result = Math.floor(num / romanNumeral[i][1]);
        

        if (div_result > 0) {
            for (let j = 0; j < div_result; j++) {
                result += romanNumeral[i][0];
            }
            num = num % romanNumeral[i][1];

        }
    }

    return result;
}

console.log(integerToRoman(58));
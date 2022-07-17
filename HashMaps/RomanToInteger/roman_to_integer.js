

function romanToInteger(s)
{
    let romanLiterals = {
        "I": 1,
        "V": 5,
        "X": 10,
        "L": 50,
        "C": 100,
        "D": 500,
        "M": 1000
      };

      let total = 0;

      for (let i = 0; i < s.length; i++) {
            if(i + 1 < s.length && romanLiterals[s[i]] < romanLiterals[s[i+1]]) total -= romanLiterals[s[i]]
            else total += romanLiterals[s[i]];
      }
      return total;
}

console.log(romanToInteger("MCMXCIV"));
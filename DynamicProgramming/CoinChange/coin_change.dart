import 'dart:math';

void main(List<String> args) {
  print(coinChange(11, [1, 2, 5]));
}

coinChange(int amount, List coins) {
  // initialize an array that will hold the number of coins it will take to hold every amount from 0 to the amount we looking for and initialize it to a big possible number
  List dp = [];

  // create a loop that adds a big enough number to every position in dp array. If the language you are familiar with has an inbuilt function to fill the dp array with a default value for amount+1 positions, you can use that
  for (var i = 0; i <= amount; i++) {
    // we initialize all to amount + 1 as it the bigger than all possible valid number of coins we can have.
    dp.add(amount + 1);
  }

  // since it take 0 coins to make 0 amount we initialize dp[0] to 0
  dp[0] = 0;

  // we go over every number from zero to amount to try to populate the dp array up to amount
  for (var i = 1; i <= amount; i++) {
    // taking each amount, we check every coin at our disposal and check it against the current amount
    for (var j = 0; j < coins.length; j++) {
      // if the current coin we are checking can be substracted from the current number and return a positive value or zero, it means we can compute the dp of that index
      if (i - coins[j] >= 0) {
        // if we are not able to compute the value of amount i.e if the dp of amount is still the amount+1 we computed, return -1, else return dp amount
        dp[i] = min(dp[i] as int, 1 + dp[i - coins[j] as int]);
      }
    }
  }
  // if we are not able to compute the value of amount i.e if the dp of amount is still the amount+1 we computed, return -1, else return dp amount
  return dp[amount] > amount ? -1 : dp[amount];
}

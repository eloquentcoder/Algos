import 'dart:math';

void main(List<String> args) {
  print(rob([1, 2, 3, 1]));
}

rob(List houses) {
  // initialize the dp array that we will use to store the maximum amount we can rob at every point and initialize it to a small number, here being 0
  var dp = [];

  for (var i = 0; i < houses.length; i++) {
    dp.add(0);
  }

  // set the maximum amount we can use to rob at house 0 to the money available at house 0
  dp[0] = houses[0];

  // the maximum we can rob at house 1 will be the maximum at house 0 and house 1
  dp[1] = max(houses[0] as int, houses[1] as int);

  // go through the remaining houses
  for (var i = 2; i < houses.length; i++) {
    // to get the maximum it takes to steal at the current house, we take the amount we can steal from the previous house and compare it to the amount we can steal from the current house plus the max amount we can steal from the house - 2
    dp[i] = max(dp[i - 1] as int, (houses[i] + dp[i - 2] as int));
  }

  // then we return the dp of the the count of houses - 1. This will give the maximum amount we can steal at the last house
  return dp[houses.length - 1];
}

function rob(nums) {
    // initialize the dp array that we will use to store 
    // the maximum amount we can rob at every point
    let dp = [];
    // set the maximum amount we can use to rob at house 
    // 0 to the money available at house 0


    dp[0] = nums[0];
    // the maximum we can rob at house 1 will be the 
    // maximum at house 0 and house 1

    dp[1] = Math.max(nums[1], nums[0]);

    // go through the remaining houses

    for (let i = 2; i < nums.length; i++) {
        // to get the maximum it takes to steal at the current house, 
        //we take the amount we can steal from the previous house and 
        //compare it to the amount we can steal from the current house 
        // plus the max amount we can steal from the house - 2

        dp[i] = Math.max(dp[i - 1], dp[i - 2] + nums[i]);
    }

    // then we return the dp of the the count of houses - 1. 
    // This will give the maximum amount we can steal at the last house

    return dp[nums.length - 1];
}

console.log(rob([1, 2, 3, 1]));
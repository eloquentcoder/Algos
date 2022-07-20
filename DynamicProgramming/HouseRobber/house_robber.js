function rob(nums) {
    let dp = [];
    dp[0] = nums[0];
    dp[1] = Math.max(nums[1], nums[0]);


    for (let i = 2; i < nums.length; i++) {
        dp[i] = Math.max(dp[i-1], dp[i-2] + nums[i]);
    }

    return dp[nums.length - 1];
}

console.log(rob([1,2,3,1]));
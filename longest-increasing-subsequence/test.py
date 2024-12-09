def lengthOfLIS(nums: list[int]) -> int:
    dp = [1] * len(nums)
    i = 0
    for num in nums:
        for j in range(i):
            if nums[j] < nums[i]:
                dp[i] = max(dp[i], dp[j] + 1)
        i += 1
    return max(dp)


nums = [10,9,2,5,3,7,101,18]
# nums = [0,1,0,3,2,3]
# nums = [7,7,7,7,7,7]
print(lengthOfLIS(nums))
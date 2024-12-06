<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS(array $nums) {
        $dp = array_fill(0, count($nums), 1);
        for ($i = 1; $i < count($nums); $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($nums[$j] < $nums[$i]) {
                    $dp[$i] = max($dp[$i], $dp[$j] + 1);
                }
            }
        }

        return max($dp);
    }
}

$solution = new Solution();

$nums = [10,9,2,5,3,7,101,18];
$nums = [0,1,0,3,2,3];
$nums = [7,7,7,7,7,7];
print($solution->lengthOfLIS($nums));
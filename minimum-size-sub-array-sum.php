<?php

class Solution
{

    /** (https://leetcode.com/problems/minimum-size-subarray-sum/)
     * @param Integer $target
     * @param Integer[] $nums
     * @return Integer
     */
    function minSubArrayLen($target, $nums)
    {
        $len = count($nums);
        $sum = 0;
        $minWindowSize = PHP_INT_MAX;
        $left = $right = 0;

        for ($i = 0; $i < $len; $i++) {
            $sum += $nums[$i];
            while ($target <= $sum) {
                $minWindowSize = min($minWindowSize, $right - $left + 1);
                $sum -= $nums[$left];
                $left++;
            }

            $right++;
        }

        return $minWindowSize === PHP_INT_MAX ? 0 : $minWindowSize;
    }
}

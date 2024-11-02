<?php

class Solution
{

    /** (https://leetcode.com/problems/search-insert-position/)
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $low = 0;
        $high = count($nums) - 1;

        while ($low <= $high) {
            $midIndex = floor(($low + $high) / 2);
            if ($nums[$midIndex] === $target) {
                return $midIndex;
            }

            if ($nums[$midIndex] > $target) {
                $high = $midIndex - 1;
            } else {
                $low = $midIndex + 1;
            }
        }

        return $low;
    }
}

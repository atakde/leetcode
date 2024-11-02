<?php

class Solution
{

    /** (https://leetcode.com/problems/rotate-array/)
     * @param Integer[] $nums
     * @param Integer $k
     * @return NULL
     */
    function rotate(&$nums, $k)
    {
        $countNums = count($nums);
        $maxIndex = $countNums - 1;

        $newArray = array_fill(0, $countNums, 0);
        foreach ($nums as $key => $each) {
            $newKey = $key + $k;
            if ($newKey > $maxIndex) {
                $newKey = $newKey % $countNums;
            }

            $newArray[$newKey] = $each;
        }

        $nums = $newArray;
    }
}

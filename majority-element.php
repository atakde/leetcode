<?php

class Solution
{

    /** (https://leetcode.com/problems/majority-element/description/?envType=study-plan-v2&envId=top-interview-150)
     * @param Integer[] $nums
     * @return Integer
     */
    public function majorityElement($nums)
    {
        $half = floor(count($nums) / 2);
        if ($half == 0) {
            return $nums[0];
        }

        $arr = [];
        $max = null;
        foreach ($nums as $eachNum) {
            if (isset($arr[$eachNum]) && $arr[$eachNum] >= $half) {
                $max = $eachNum;
                break;
            } else {
                $arr[$eachNum]++;
            }
        }

        return $max;
    }
}

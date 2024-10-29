<?php

class Solution
{

    /** (https://leetcode.com/problems/two-sum-ii-input-array-is-sorted/?envType=study-plan-v2&envId=top-interview-150)
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target)
    {
        $left = 0;
        $right = count($numbers) - 1;
        while ($left < $right) {
            $num = $numbers[$left] + $numbers[$right];
            if ($num === $target) {
                return [$left + 1, $right + 1];
            } elseif ($num > $target) {
                $right--;
            } else {
                $left++;
            }
        }
    }
}

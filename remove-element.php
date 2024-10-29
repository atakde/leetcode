<?php

class Solution
{

    /**
     * (https://leetcode.com/problems/remove-element/)
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    public function removeElement(&$nums, $val)
    {
        // foreach ($nums as $k => $v) {
        //     if ($v === $val) {
        //         unset($nums[$k]);
        //     }
        // }

        // $nums = array_values($nums);
        // return count($nums);

        // another solution

        $tmp = [];
        foreach ($nums as $k => $v) {
            if ($v !== $val) {
                $tmp[] = $v;
            }
        }

        $nums = $tmp;
        unset($tmp);
        return count($nums);
    }
}

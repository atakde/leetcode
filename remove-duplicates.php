<?php

class Solution
{

    /**
     * (https://leetcode.com/problems/remove-duplicates-from-sorted-array/)
     * @param Integer[] $nums
     * @return Integer
     */
    public function removeDuplicates(&$nums)
    {
        //$nums = array_unique($nums); // Not fair

        // another solution
        // $count = count($nums);
        // for ($i = 0; $i < $count; $i++) {
        //     for ($j = $i + 1; $j < $count; $j++) {
        //         if (isset($nums[$i], $nums[$j]) && $nums[$i] === $nums[$j]) {
        //             unset($nums[$j]);
        //         }
        //     }
        // }

        // more efficient solution
        $tmp = [];
        foreach ($nums as $eachNum) {
            if (!isset($tmp[$eachNum])) {
                $tmp[$eachNum] = true;
            }
        }

        $nums = array_keys($tmp);
    }
}

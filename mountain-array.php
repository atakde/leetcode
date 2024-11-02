<?php

class Solution
{

    /** (https://leetcode.com/problems/valid-mountain-array)
     * @param Integer[] $arr
     * @return Integer
     */
    function minimumMountainRemovals($arr)
    {
        $maxValue = max($arr);
        $keyOfMaxValue = array_search($maxValue, $arr);

        if ($keyOfMaxValue === 0 || $keyOfMaxValue === count($arr) - 1) {
            return false;
        }

        for ($i = 0; $i < $keyOfMaxValue; $i++) {
            if ($arr[$i] >= $arr[$i + 1]) {
                return false;
            }
        }

        for ($i = $keyOfMaxValue; $i < count($arr) - 1; $i++) {
            if ($arr[$i] <= $arr[$i + 1]) {
                return false;
            }
        }

        return true;

        /**
         * Good approach from community
         */
        // $left = 0;
        // $right = count($arr) - 1;

        // while($left < count($arr) - 1 && $arr[$left] < $arr[$left + 1])
        //     $left += 1;

        // while($right > 0 && $arr[$right] < $arr[$right - 1])
        //     $right -= 1;

        // if($left > 0 && $left == $right && $right < count($arr) - 1)
        //     return true;
        // else
        //     return false;
    }
}

<?php

class Solution
{
    /** (https://leetcode.com/problems/happy-number/)
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n)
    {
        $digits = str_split($n);
        $history = [];

        while (true) {
            $sum = 0;
            foreach ($digits as &$eachDigit) {
                $sum += $eachDigit * $eachDigit;
            }

            if (isset($history[$sum])) {
                return false;
            }

            $history[$sum] = true;

            if ($sum > 1) {
                $digits = str_split($sum);
            } else {
                return true;
            }
        }
    }
}

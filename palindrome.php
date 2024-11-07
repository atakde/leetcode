<?php

class Solution
{

    /** (https://leetcode.com/problems/valid-palindrome/)
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s)
    {
        $s = preg_replace('/[^0-9a-zA-Z]/', '', $s);
        $s = strtolower($s);

        $left = 0;
        $right = strlen($s) - 1;

        while ($left <= $right) {
            if ($s[$left] !== $s[$right]) {
                return false;
            }

            $left++;
            $right--;
        }

        return true;
    }
}

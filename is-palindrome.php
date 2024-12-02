<?php

class Solution
{

    /** (https://leetcode.com/problems/valid-palindrome/)
     * @return Boolean
     */
    function isPalindrome($x)
    {
        $x = (string)$x;
        $len = strlen($x);
        $reversed = '';
        for ($i = $len - 1; $i >= 0; $i--) {
            $reversed .= $x[$i];
        }

        return $x === $reversed;
    }
}


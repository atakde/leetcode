<?php

class Solution
{

    /** (https://leetcode.com/problems/is-subsequence)
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t)
    {
        $index = 0;
        for ($i = 0; $i < strlen($t); $i++) {
            if ($t[$i] == $s[$index]) {
                $index++;
            }
        }

        return strlen($s) === $index;
    }
}

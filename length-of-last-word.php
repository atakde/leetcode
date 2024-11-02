<?php

class Solution
{

    /** (https://leetcode.com/problems/length-of-last-word/)
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        $s = trim($s);
        $keywords = explode(' ', $s);
        return strlen(end($keywords));
    }
}

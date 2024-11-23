<?php

class Solution
{
    /**
     * https://leetcode.com/problems/valid-anagram
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isAnagram($s, $t)
    {
        $sLen = strlen($s);
        $tLen = strlen($t);

        if ($sLen !== $tLen) {
            return false;
        }

        $wordMapS = [];
        $index = 0;
        while ($index < $sLen) {
            $wordMapS[$s[$index]]++;
            $index++;
        }

        $wordMapT = [];
        $index = 0;
        while ($index < $tLen) {
            $wordMapT[$t[$index]]++;
            $index++;
        }

        foreach ($wordMapT as $key => $value) {
            if (!isset($wordMapS[$key])) {
                return false;
            }

            if ($wordMapS[$key] !== $wordMapT[$key]) {
                return false;
            }
        }

        return true;
    }
}

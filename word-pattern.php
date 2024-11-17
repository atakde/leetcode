<?php

class Solution
{

    /** (https://leetcode.com/problems/word-pattern/)
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s)
    {
        $explodedS = explode(' ', $s);
        $mappedStr = '';
        $mapping = [];
        $usedChars = [];
        foreach ($explodedS as $key => $value) {
            if (!isset($mapping[$value]) && !isset($usedChars[$pattern[$key]])) {
                $mapping[$value] = $pattern[$key] ?? '-';
                $usedChars[$pattern[$key]] = true;
            }

            $mappedStr .= $mapping[$value];
        }

        return $mappedStr === $pattern;
    }
}

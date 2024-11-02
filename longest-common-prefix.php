<?php

class Solution
{

    /** (https://leetcode.com/problems/longest-common-prefix/)
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        usort($strs, function ($a, $b) {
            return strlen($a) - strlen($b);
        });

        $prefix = $strs[0];
        $i = 0;
        $counter = 0;
        $strsCount = count($strs);

        while ($i < $strsCount) {
            if (!str_starts_with($strs[$i], $prefix)) {
                $prefix = substr($prefix, 0, -1);
                $i = 0;
                $counter = 0;
            } else {
                $counter++;
                $i++;
            }
        }

        return $counter === $strsCount ? $prefix : "";
    }
}

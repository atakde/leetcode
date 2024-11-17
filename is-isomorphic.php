<?php

class Solution
{

    /** (https://leetcode.com/problems/isomorphic-strings/)
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t)
    {
        $mapping = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (!isset($mapping[$s[$i]])) {
                if (in_array($t[$i], array_values($mapping))) {
                    return false;
                }
                $mapping[$s[$i]] = $t[$i];
            } else {
                if ($mapping[$s[$i]] !== $t[$i]) {
                    return false;
                }
            }

            $s[$i] = $mapping[$s[$i]];
        }

        return $s === $t;
    }
}

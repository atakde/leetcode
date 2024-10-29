<?php

class Solution
{
    /** (https://leetcode.com/problems/find-the-index-of-the-first-occurrence-in-a-string/description/?envType=study-plan-v2&envId=top-interview-150)
     * @param String $haystack
     * @param String $needle
     * @return Integer
     */
    public function strStr($haystack, $needle)
    {
        for ($i = 0; $i < strlen($haystack); $i++) {
            $text = '';
            $tmpi = $i;

            for ($k = 0; $k < strlen($needle); $k++) {
                if ($needle[$k] !== $haystack[$tmpi]) {
                    break;
                } else {
                    $text .= $needle[$k];
                    $tmpi++;
                }
            }

            if ($text === $needle) {
                return $tmpi - strlen($needle);
            }
        }

        return -1;
    }
}

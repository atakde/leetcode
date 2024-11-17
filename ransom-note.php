<?php

class Solution
{

    /** (https://leetcode.com/problems/ransom-note/)
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine)
    {
        for ($i = 0; $i < strlen($magazine); $i++) {
            if (empty($ransomNote)) {
                return true;
            }
            $char = $magazine[$i];
            $ransomNote = preg_replace("/$char/", '', $ransomNote, 1);
        }

        return empty($ransomNote);
    }
}

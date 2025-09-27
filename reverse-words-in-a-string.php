<?php

class Solution
{
    /**
     * @param String $s
     * @return String
     * (https://leetcode.com/problems/reverse-words-in-a-string/)
     */
    public function reverseWords($s)
    {
        $resultString = "";
        $tmpString = "";
        $length = strlen($s);
        for ($i = 0; $i <= $length; $i++) {
            $currentChar = $s[$i];

            if ($currentChar === " " || ($i === $length) && $tmpString) {
                $lastChar = $s[$i - 1] ?? null;
                if ($lastChar === " " && $currentChar === " ") {
                    continue;
                }
                $resultString = $resultString === "" ? $tmpString : $tmpString . " " . $resultString;
                $tmpString = "";
            } else {
                $tmpString .= $currentChar;
            }
        }

        return $resultString;
    }
}

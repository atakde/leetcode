<?php

class Solution
{

    /** (https://leetcode.com/problems/rotate-string/)
     * @param String $s
     * @param String $goal
     * @return Boolean
     */
    function rotateString($s, $goal)
    {
        $index = 0;
        $maxIndex = strlen($s) - 1;
        while ($index <= strlen($s)) {
            $newArray = array_fill(0, strlen($s), 0);
            for ($i = 0; $i < strlen($s); $i++) {
                $newKey = $i + 1;
                if ($newKey > $maxIndex) {
                    $newKey = $newKey % strlen($s);
                }

                $newArray[$newKey] = $s[$i];
            }

            $str = implode('', $newArray);
            if ($str === $goal) {
                return true;
            } else {
                $s = $str;
            }

            $index++;
        }

        return false;
    }
}

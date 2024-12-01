<?php

class Solution
{
    /** (https://leetcode.com/problems/add-binary/)
     * @param String $a
     * @param String $b
     * @return String
     */
    function addBinary($a, $b)
    {
        $aLength = strlen($a);
        $bLength = strlen($b);

        $max = max($aLength, $bLength);

        if ($max > $aLength) {
            $a = str_pad($a, $max, '0', STR_PAD_LEFT);
        } elseif ($max > $bLength) {
            $b = str_pad($b, $max, '0', STR_PAD_LEFT);
        }

        $carry = 0;
        $result = '';
        for ($i = $max - 1; $i >= 0; $i--) {
            $sum = intval($a[$i]) + intval($b[$i]) + $carry;
            if ($sum > 1) {
                $result = $sum % 2 . $result;
                $carry = 1;
            } else {
                $carry = 0;
                $result = $sum . $result;
            }

            if ($i === 0 && $carry === 1) {
                $result = '1' . $result;
            }
        }

        return $result;
    }
}

<?php

class Solution
{

    /**
     * (https://leetcode.com/problems/roman-to-integer/)
     * @param String $s
     * @return Integer
     */
    public function romanToInt($s)
    {
        $mapping = [
            'I' =>   1,
            'V' =>   5,
            'X' =>  10,
            'L' =>  50,
            'C' => 100,
            'D' => 500,
            'M' => 1000,
        ];

        $sum = 0;
        $prevValue = 0;
        $currentValue = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            $nextValue = isset($s[$i + 1]) ? $mapping[$s[$i + 1]] : null;
            $currentValue = $mapping[$s[$i]];

            if ($nextValue && $currentValue < $nextValue) {
                $sum -= $currentValue;
            } else {
                $sum += $currentValue;
            }
        }

        return $sum;
    }
}

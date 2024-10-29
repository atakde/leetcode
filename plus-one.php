<?php

class Solution
{
    /** (https://leetcode.com/problems/plus-one/?envType=study-plan-v2&envId=top-interview-150)
     * @param Integer[] $digits
     * @return Integer[]
     */
    public function plusOne($digits)
    {
        $number = bcadd(implode('', $digits), 1);
        return str_split((string)$number);
    }
}

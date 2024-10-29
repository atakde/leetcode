<?php

class Solution
{

    /**
     * (https://leetcode.com/problems/best-time-to-buy-and-sell-stock/)
     * @param Integer[] $prices
     * @return Integer
     */
    public function maxProfit($prices)
    {
        $count = count($prices);
        $maxDiff = 0;
        $minPrice = PHP_INT_MAX;
        for ($i = 0; $i < $count; $i++) {
            if ($prices[$i] < $minPrice) {
                $minPrice = $prices[$i];
            }

            $diff = $prices[$i] - $minPrice;
            if ($diff > $maxDiff) {
                $maxDiff = $diff;
            }
        }

        return $maxDiff;
    }
}

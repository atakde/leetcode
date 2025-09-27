<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     * (https://leetcode.com/problems/best-time-to-buy-and-sell-stock-ii/)
     */
    function maxProfit($prices) {
        $profit = 0;
        $n = count($prices);

        for ($i = 1; $i < $n; $i++) {
            if ($prices[$i] > $prices[$i - 1]) {
                $profit += $prices[$i] - $prices[$i - 1];
            }
        }

        return $profit;
    }
}

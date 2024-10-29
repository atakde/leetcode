<?php

class Solution
{

    /**
     * https://leetcode.com/problems/candy/description/?envType=study-plan-v2&envId=top-interview-150
     * @param Integer[] $ratings
     * @return Integer
     */
    public function candy($ratings)
    {
        $given = array_fill(0, count($ratings), 1);
        $ratingsCount = count($ratings);

        for ($i = 0; $i < $ratingsCount; $i = $i + 1) {
            if ($ratings[$i + 1] > $ratings[$i]) {
                $given[$i + 1] = $given[$i] + 1;
            }
        }

        for ($i = $ratingsCount - 1; $i >= 0; $i--) {
            if ($ratings[$i - 1] > $ratings[$i]) {
                $given[$i - 1] = max($given[$i] + 1, $given[$i - 1]);
            }
        }

        return array_sum($given);
    }
}

// $obj = new Solution();
// $obj->candy([1, 2, 87, 87, 87, 2, 1]); // 7
// $obj->candy([1, 3, 2, 2, 1]); // 7
// $obj->candy([1, 2, 2]); // 4
// $obj->candy([1, 0, 2]); // 5
// $obj->candy([1, 3, 4, 5, 2]); // 5

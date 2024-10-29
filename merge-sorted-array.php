<?php

class Solution
{

    /**
     * (https://leetcode.com/problems/merge-sorted-array/)
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    public function merge(&$nums1, $m, $nums2, $n)
    {
        $merged = array_merge(array_slice($nums1, 0, $m), array_slice($nums2, 0, $n));
        sort($merged);
        $nums1 = array_slice($merged, 0, $m + $n);
    }
}

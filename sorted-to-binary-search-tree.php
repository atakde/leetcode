<?php

// class TreeNode
// {
//     public $val = null;
//     public $left = null;
//     public $right = null;
//     function __construct($val = 0, $left = null, $right = null)
//     {
//         $this->val = $val;
//         $this->left = $left;
//         $this->right = $right;
//     }
// }

class Solution
{

    /** (https://leetcode.com/problems/convert-sorted-array-to-binary-search-tree/)
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums)
    {
        if (empty($nums)) {
            return null;
        }

        $mid = intval(count($nums) / 2);

        $root = new TreeNode($nums[$mid]);
        $root->left = $this->sortedArrayToBST(array_slice($nums, 0, $mid));
        $root->right = $this->sortedArrayToBST(array_slice($nums, $mid + 1, count($nums)));

        return $root;
    }
}

// $obj = new Solution();
// $obj->sortedArrayToBST([-10,-3,0,5,9]);

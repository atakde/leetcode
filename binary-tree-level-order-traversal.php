<?php

/**
 * (https://leetcode.com/problems/binary-tree-level-order-traversal/description/?envType=study-plan-v2&envId=top-interview-150)
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{
    public $results = [];

    /**
     * @param TreeNode $root
     * @return Integer[][]
     */
    public function levelOrder($root)
    {
        $this->fill($root);
        return $this->results;
    }

    private function fill($root, $level = 0)
    {
        if (!is_object($root)) {
            return;
        }

        $this->results[$level][] = $root->val;

        $tmpLevel = $level + 1;
        $this->fill($root->left, $tmpLevel);
        $this->fill($root->right, $tmpLevel);
    }
}

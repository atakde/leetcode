<?php

/**
 * (https://leetcode.com/problems/course-schedule-ii)
 */

class TrieNode
{
    public $child = [];
    public $isWord = false;
}

class Trie
{
    private $root;
    /**
     */
    function __construct()
    {
        $this->root = new TrieNode();
    }

    /**
     * @param String $word
     * @return NULL
     */
    function insert($word)
    {
        $lenght = strlen($word);
        $currentRoot = $this->root;

        for ($i = 0; $i < $lenght; $i++) {
            $char = $word[$i];
            if (!isset($currentRoot->child[$char])) {
                $currentRoot->child[$char] = new TrieNode();
            }

            $currentRoot = $currentRoot->child[$char];
        }

        $currentRoot->isWord = true;
    }

    /**
     * @param String $word
     * @return Boolean
     */
    function search($word, $isPrefixSearch = false)
    {
        $lenght = strlen($word);
        $currentRoot = $this->root;

        for ($i = 0; $i < $lenght; $i++) {
            $char = $word[$i];
            if (!isset($currentRoot->child[$char])) {
                return false;
            }

            $currentRoot = $currentRoot->child[$char];
        }

        return $isPrefixSearch ? true : $currentRoot->isWord;
    }

    /**
     * @param String $prefix
     * @return Boolean
     */
    function startsWith($prefix)
    {
        return $this->search($prefix, true);
    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */

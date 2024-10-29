<?php

/**
 * Url (https://leetcode.com/problems/insert-delete-getrandom-o1/?envType=study-plan-v2&envId=top-interview-150)
 */
class RandomizedSet
{
    private array $items = [];
    private array $values = [];

    /**
     */
    public function __construct() {}

    /**
     * @param Integer $val
     * @return Boolean
     */
    public function insert($val)
    {
        if (isset($this->items[$val])) {
            return false;
        }

        $this->items[$val] = count($this->values);
        $this->values[] = $val;

        return true;
    }

    /**
     * @param Integer $val
     * @return Boolean
     */
    public function remove($val)
    {
        if (!isset($this->items[$val])) {
            return false;
        }

        $index = $this->items[$val];
        $lastIndex = count($this->values) - 1;

        if ($index !== $lastIndex) {
            $lastValue = $this->values[$lastIndex];
            $this->values[$index] = $lastValue;
            $this->items[$lastValue] = $index;
        }

        array_pop($this->values);
        unset($this->items[$val]);

        return true;
    }

    /**
     * @return Integer
     */
    public function getRandom()
    {
        $randomIndex = rand(0, count($this->values) - 1);
        return $this->values[$randomIndex];
    }
}

/**
 * Your RandomizedSet object will be instantiated and called as such:
 * $obj = RandomizedSet();
 * $ret_1 = $obj->insert($val);
 * $ret_2 = $obj->remove($val);
 * $ret_3 = $obj->getRandom();
 */

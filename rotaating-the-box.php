<?php

class Solution
{
    /** https://leetcode.com/problems/rotating-the-box/
     * @param String[][] $box
     * @return String[][]
     */
    function rotateTheBox($box)
    {
        $rows = count($box);
        $cols = count($box[0]);

        for ($i = 0; $i < $cols; $i++) {
            for ($j = 0; $j < $rows; $j++) {
                $newArr[$i][] = $box[$j][$i];
            }

            $newArr[$i] = array_reverse($newArr[$i]);
        }

        for ($i = $cols - 1; $i >= 0; $i--) {
            for ($j = 0; $j < $rows; $j++) {
                if ($newArr[$i][$j] === '#') {
                    $k = $i;
                    while (isset($newArr[$k + 1][$j]) && $newArr[$k + 1][$j] === '.') {
                        $newArr[$k + 1][$j] = '#';
                        $newArr[$k][$j] = '.';
                        $k++;
                    }
                }
            }
        }

        for ($i = 0; $i < $cols; $i++) {
            for ($j = 0; $j < $rows; $j++) {
                echo $newArr[$i][$j];
            }

            echo PHP_EOL;
        }
    }
}

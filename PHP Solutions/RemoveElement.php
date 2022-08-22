<?php

// LeetCode Problem: Remove Element
// Around 10ms

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        $k = 0;
        for ($x = 0; $x < sizeof($nums); $x++){
            if($nums[$x] != $val) {
                $nums[$k] = $nums[$x];
                $k++;
            }
        }
        
        return $k;
    }
}
?>
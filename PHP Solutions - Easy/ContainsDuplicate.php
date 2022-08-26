<?php

// LeetCode Problem: Contains Duplicate
// Around 35ms

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums) {
        $result = array_unique($nums);
        
        return sizeof($nums) == sizeof($result) ? false : true;
        
    }
}
?>
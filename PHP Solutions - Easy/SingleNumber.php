<?php 

// LeetCode Problem: Single Number
// Around 43ms

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $countedArray = array_count_values($nums);
        
        foreach($countedArray as $key=>$count){
            if($count == 1){
                return $key;
            }
        }
    }
}
?>
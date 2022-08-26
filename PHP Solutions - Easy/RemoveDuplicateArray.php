<?php

// LeetCode Problem: Remove Duplicate from Sorted Array
// Around 35ms

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $k = 0;
        $arr = array();
        
        for ($x = 0; $x < sizeof($nums); $x++){
            if( !in_array( $nums[$x] ,$arr ) ){
                array_push($arr, $nums[$x]);
                $nums[$k] = $nums[$x];
                $k++;
            }
        }
        
        return $k;
    }
}

?>
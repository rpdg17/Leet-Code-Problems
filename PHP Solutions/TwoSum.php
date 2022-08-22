<?php

// LeetCode Problem : Two Sum
// Around 120ms

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $numberOfArrays = count($nums);
        
        for($x=0; $x < $numberOfArrays; $x++){
            $diffNum = $target - $nums[$x];
            
            unset($nums[$x]);
            if(array_search($diffNum, $nums) !== false){
                $indexTwo = array_search($diffNum, $nums);
                
                return [$x, $indexTwo];
            }
        }
    }
}

?>
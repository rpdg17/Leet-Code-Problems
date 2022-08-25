<?php

// LeetCode Problem: Plus One
// Around 14ms

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $newDigits = implode("",$digits);
        
        $newDigits = bcadd(1, $newDigits);
        
        return str_split($newDigits);
    }
}
?>
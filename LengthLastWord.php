<?php

// LeetCode Problem: Length of Last Word
// Around 11ms

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $splitted = preg_split("/[^\w]*([\s]+[^\w]*|$)/", $s, -1, PREG_SPLIT_NO_EMPTY);
        
        $splittedCount = sizeof($splitted);
        
        return strlen($splitted[$splittedCount - 1]);
    }
}
?>
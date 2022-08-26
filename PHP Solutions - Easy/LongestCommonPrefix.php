<?php

// LeetCode Problem: Longest Common Prefix
// Around 100ms

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs) {
        $countArray = sizeof($strs);
        $prefixCount = 0;
        $counter = 0;
        $prefix = "";
        
        $word = str_split($strs[0]);
        foreach($word as $letter){
            $arrayByLetter = [];
            array_push($arrayByLetter, $letter);

            for($x = 1; $x < $countArray; $x++){
                $words = str_split($strs[$x]);
                array_push($arrayByLetter, $words[$prefixCount]);
            }

            if(sizeof(array_unique($arrayByLetter)) == 1){
                $prefix .= array_unique($arrayByLetter)[0];
            } else{
                break;
            }

            $prefixCount = $prefixCount + 1;
        }
        
        return $prefix;
    }
}

?>
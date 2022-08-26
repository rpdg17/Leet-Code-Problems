<?php

// LeetCode Problem: Roman To Integer
// Around 23ms

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $romanNumerals = array(
            "I" => 1, 
            "V" => 5,
            "X" => 10,
            "L" => 50,
            "C" => 100,
            "D" => 500,
            "M" => 1000
        );
        
        $romanNumber = str_split($s);
        $total = 0;
        
        do {
            $first = $romanNumerals[$romanNumber[0]];

            if(sizeof($romanNumber) >= 2){
                $second = $romanNumerals[$romanNumber[1]];

                if($first < $second) {
                    $val = $second - $first;
                    $total = $total + $val;
                    array_shift($romanNumber);
                    array_shift($romanNumber);
                } else{
                    $total = $total + $first;
                    array_shift($romanNumber);
                }
            } else {
                $total = $total + $first;
                array_shift($romanNumber);
            }


        } while (sizeof($romanNumber) > 0);
        
        return $total;
    }
}

?>

<?php

// LeetCode Problem: Unique Morse Code Words
// Around 15ms

class Solution {

    /**
     * @param String[] $words
     * @return Integer
     */
    function uniqueMorseRepresentations($words) {
        $morsecode = [".-","-...","-.-.","-..",".","..-.","--.","....","..",".---","-.-",".-..","--","-.","---",".--.","--.-",".-.","...","-","..-","...-",".--","-..-","-.--","--.."];
        $uniqueMorseCode = [];
        
        for($x = 0; $x < sizeof($words); $x++){
            $word = str_split($words[$x]);
            $morseCodeByWord = "";
            foreach($word as $char){
                $charPosition = $this->offset($char);
                $morseCodeByWord .= $morsecode[$charPosition];
            }
            if( !in_array( $morseCodeByWord ,$uniqueMorseCode ) ){
                array_push($uniqueMorseCode, $morseCodeByWord);
            } 
        }
        
        return sizeof($uniqueMorseCode);
    }
    
    function offset(string $char): int {
        $abcUpper = range('A', 'Z');
        $abcLower = range('a', 'z');

        if (ctype_upper($char)) return array_search($char, $abcUpper);
        else return array_search($char, $abcLower);
    }
}
?>
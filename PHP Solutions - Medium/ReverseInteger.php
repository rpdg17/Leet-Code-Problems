<?php

// LeetCode Problem: Reverse Integer
// Around 7ms

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $res = ($x <=> 0) * intval(strrev(abs($x)));
        return ($res >= 2**31-1 || $res <= -2**31) ? 0 : $res;
    }
}
?>
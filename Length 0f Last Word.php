<?php 
class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $s = rtrim($s);

        $words = explode (" ", $s);
        return strlen(end($words));
    }
}
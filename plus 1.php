<?php
class Solution {

/**
 * @param Integer[] $digits
 * @return Integer[]
 */
function plusOne($digits) {
    $n = count($digits);
    for($i=$n-1; $i >= 0; $i--){
        if ($digits[$i] < 9){
            $digits[$i]++;
            return $digits;
        } 
        $digits[$i] = 0;
    }

    array_unshift($digits, 1);
    return $digits;
}
}
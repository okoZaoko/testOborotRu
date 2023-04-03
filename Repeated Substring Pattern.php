<?php
class Solution {

/**
 * @param String $s
 * @return Boolean
 */
function repeatedSubstringPattern($s) {
    $n = strlen($s);
    for ($i=1; $i <= $n / 2; $i++){
        if ($n % $i == 0) {
            $substring = substr($s, 0, $i);
            $j = $i;
            while ($j < $n && substr($s, $j, $i) == $substring){
                $j += $i;
            }
            if ($j == $n){
                return true;
            }
        }
    }

    return false;
}
}
<?php

$n = count($nums);
    if ($n <= 1) {
        return $n;
    }
    $j = 0;
    for ($i = 1; $i < $n; $i++) {
        if ($nums[$i] != $nums[$j]) {
            $j++;
            $nums[$j] = $nums[$i];
        }
    }
    return $j + 1;
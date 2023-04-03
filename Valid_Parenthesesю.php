<?php 

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
         $stack =[];
 $mapping = [
    ')' => '(',
    '}' => '{',
    ']' => '['
    ];
for ($i = 0; $i < strlen($s); $i++){
    $char = $s[$i];
    if (array_key_exists($char, $mapping)) {
        $top_element = (count($stack) == 0) ? '#' : array_pop($stack);
        if ($mapping[$char] != $top_element){
            return false;
        }
    } else {
        array_push($stack, $char);
    }
}

return count($stack) == 0;
    }
}

   $dummy = new ListNode(0);
    $curr = $dummy;

    while ($list1 != null && $list2 != null) {
        if ($list1->val < $list2->val) {
            $curr->next = $list1;
            $list1 = $list1->next;
        } else {
            $curr->next = $list2;
            $list2 = $list2->next;
        }
        $curr = $curr->next;
    }

    if ($list1 != null) {
        $curr->next = $list1;
    } elseif ($list2 != null) {
        $curr->next = $list2;
    }

    return $dummy->next;
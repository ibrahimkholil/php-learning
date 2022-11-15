<?php
/*
 * Unlimited arguments pass
 * variable-length arguments
 * ... is an array
 */

function sum(  int ...$number ):int {
    $result = 0;
    for ( $i = 0; $i < count($number) ; $i++){

       $result +=$number[$i];
    }
    return $result;
}

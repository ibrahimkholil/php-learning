<?php
/*
 * Factorial check by number
 * With Type hinting we can specify the expected data type (arrays, objects, interface, etc.)
 * for an argument in a function declaration. This practice can be most advantageous because
 * it results in better code organization and improved error messages.
 */

function factorial (int $n){
	$result = 1;
	for ($i = $n ; $i> 1 ; $i--){
		$result *= $i;
	}
	return $result;

}
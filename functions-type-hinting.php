<?php
/*
 * Type Hinting -With Type hinting we can specify the expected data type (arrays, objects, interface, etc.) for an argument in a function declaration. This practice can be most advantageous because it results in better code organization and improved error messages.
 * Factorial by function
 */
function factorial( int $n ){
    $result = 1;
    for ($i = $n ; $i > 1 ;$i--){
        $result *= $i ;
    }
    return $result;
}

//another example

function calNumMilesOnFullTank( array $models){
    foreach ($models as $model){
        echo $carModel = $model[0];
        echo " : ";
        echo $numberOfMiles = $model[1] * $model[2];
        echo "<br>";
    }

}

<?php
// Recrsive function 
// function recusiveNumber($counter,$end,$step = 1){
//         if($counter > $end){
//             return;
//         }
//         echo $counter ."\n";
//         $counter += $step;
//         recusiveNumber($counter,$end,$step);
// }

// recusiveNumber(10,27,4);
// fibonacci loop Fn = F(n-1) + F(n-2)

// $n = 1;
// $n2  = 0;
// for( $i = 0; $i <=15; $i++){
//    echo $n2 .",";
//    $temp = $n + $n2;
//    $n = $n2;
//    $n2 = $temp;
// }
// Fibonacci series by recusrive  F(n-1) + F(n-2)
// function fibonacci($n){
//   if ($n <=1) {
//     return $n;
//   }else{
//     return (fibonacci($n-1) + fibonacci($n - 2));
   
//   }
// }

// for ($i=0; $i<=15; $i++) {
//   echo " ". fibonacci( $i );
// }

function factorial($n){
    if($n <=1){
      return 1;
    }
    return $n * factorial($n -1);
}

echo factorial(6);

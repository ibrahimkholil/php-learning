<?php
/**
 * Created by PhpStorm.
 * User: IB
 * Date: 9/19/2022
 * Time: 3:57 PM
 * number patern
 */

//Test one
//
//for ($i = 0; $i <=5 ; $i++){
//	for ($j = 0;$j<$i ;$j++){
////		echo $i;
//		echo $j;
////		echo "*";
//	}
//	echo "<br/>";
//}

//Test two
$n=5;
for($i=1;$i<=$n;$i++){
	for($j=1;$j<=(2*$n)-1;$j++){
		if($j>=$n-($i-1) && $j<=$n+($i-1)){
			echo "*";
		}else{
			echo "&nbsp;&nbsp;";
			//remove spave between & and nbsp
		}
	}
	echo '</br>';
}
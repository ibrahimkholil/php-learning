<?php

function recusiveNumber($counter,$end,$step = 1){
        if($counter > $end){
            return;
        }
        echo $counter ."\n";
        $counter += $step;
        recusiveNumber($counter,$end,$step);
}

recusiveNumber(10,27,4);
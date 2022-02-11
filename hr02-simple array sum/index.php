<?php

/*
 * Complete the 'simpleArraySum' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY ar as parameter.
 */

function simpleArraySum($ar) {
    $sum = 0;
    foreach($ar as $value){
        $sum+=$value;
    }
    return $sum;

}

print_r (simpleArraySum($array = [1,2,3]));
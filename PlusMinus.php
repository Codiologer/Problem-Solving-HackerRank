<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    // Write your code here
    $n = count($arr);
    $pos = 0;
    $neg = 0;
    $zero = 0;
    for($i = 0 ; $i < $n ; $i++){
        if($arr[$i]>0){
            $pos+=1;
        }
        if($arr[$i]<0){
            $neg+=1;
        }
        if($arr[$i]==0){
            $zero+=1;
        }
    }
    $proportionsPos = $pos/$n;
    $proportionsNeg = $neg/$n;
    $proportionsZ = $zero/$n; 
    
    echo number_format($proportionsPos,6) . "\n";
    echo number_format($proportionsNeg,6) . "\n";
    echo number_format($proportionsZ,6);
}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);

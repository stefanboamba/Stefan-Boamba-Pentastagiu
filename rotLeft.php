<?php

/*
 * Complete the 'rotLeft' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER d
 */

function rotLeft($a, $d) {
    // Write your code here
    $lungime_a = count ($a);
    $d = $d % $lungime_a;
    for ($i=0; $i<$d; $i++){
        $temp = $a[0];
        for ($j=0; $j<$lungime_a-1; $j++){
             $a[$j] = $a[$j+1]; 
        }
        $a[$j] = $temp;
    }
    return $a;
    
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$d = intval($first_multiple_input[1]);

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = rotLeft($a, $d);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);

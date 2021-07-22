<?php 
//Implement the bubble sort algorithm
$arr = [1,5,3,4,2,9,8,7,6];
   $lungime_arr = count($arr)-1;
    for ($i = 0; $i < $lungime_arr; $i++) {
        for ($j = 0; $j < $lungime_arr-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                $temp = $arr [$k];
                $arr [$k] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    print_r ($arr);
    

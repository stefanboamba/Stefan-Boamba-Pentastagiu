<?php
//For a given array, reverse the order of the elements
$arr = array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$temp = 0;
$lungime_arr = count ($arr);
for ($i = 0; $i <= $lungime_arr/2; $i++){
    $temp = $arr [$i];
    $arr [$i] = $arr [$lungime_arr-1-$i];
    $arr [$lungime_arr-1-$i] = $temp;
    }
print_r ($arr);


/* sau
<?php
$arr = array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
print_r (array_reverse ($arr));
*/
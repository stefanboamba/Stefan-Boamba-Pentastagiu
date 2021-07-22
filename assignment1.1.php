<?php
////For an array of elements count the number of occurrences of a given element
$arr = array (1, 1, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 4, 4, 5);
   $nr_aparitii = 0;
   $valoare_cautata = 5;
   foreach ($arr as $value){
        if ($value === $valoare_cautata) $nr_aparitii++;
   }
   echo $nr_aparitii . "\n";
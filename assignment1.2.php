<?php
//Generate a random array of numbers and search for a specific one. If you find it then use a break to exit the loop
$max = 100;
$arr = range(0, $max);
$valoare_cautata = 91;
shuffle($arr);
$gasit = false;

foreach ($arr as $value)  {
    if ($value === $valoare_cautata) {
        $gasit = true; break;
    }
}

if ($gasit) echo "Elementul a fost gasit";
else echo "Elementul nu a fost gasit";

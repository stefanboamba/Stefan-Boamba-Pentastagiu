<?php
/*Write a small program that fakes the calculation of a net salary and returns it. The insert will be mocked( set the
parameters manually). ( MVC )*/

const IMPOZIT = 16/100;

//functia primeste ca parametri numele, salariul brut, suma primita pentru fiecare ora suplimentara, 
//numarul de ore suplimentare lucrate in luna de referinta si afiseaza salariul
function calculSalariu ($name, $salariu_brut, $plata_cu_ora, int $ore_supl){
    $salariu_net = ($salariu_brut + $ore_supl * $plata_cu_ora) * (1-IMPOZIT);
    echo "Salariul lui " . $name . " este: " . $salariu_net . "\n";
    //sau return $salariu_net, dupa care trebuie sa scriu instructiuni de afisare in afara functiei
}

calculSalariu ('Stefan', 5000.0, 22.5, 19);





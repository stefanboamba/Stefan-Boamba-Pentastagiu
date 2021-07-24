<?php
/*Write a small program that fakes the calculation of a net salary and returns it. The insert will be mocked( set the
parameters manually). ( MVC )*/

const IMPOZIT = 16/100;

class Angajat
{
    public $name; 
    public $salariu_brut;
    public $plata_cu_ora; //suma fixa cu care ii sunt platite orele suplimentare

    public function __construct (string $name, float $salariu_brut, float $plata_cu_ora){
        $this->name = $name;
        $this->salariu_brut = $salariu_brut;
        $this->plata_cu_ora = $plata_cu_ora;
    }
    //nu definesc o functie setName intrucat, odata instantiat un obiect, nu ii voi mai schimba numele
    public function getName (){
        return $this->name;
    }
    
    public function setSalariuBrut (float $salariu_brut){
        $this->salariu_brut = $salariu_brut;
    }

    public function getSalariuBrut (){
        return $this->salariu_brut;
    }

    public function setPlataCuOra (float $plata_cu_ora){
        $this->plata_cu_ora = $plata_cu_ora;
    }

    public function getPlataCuOra (){
        return $this->plata_cu_ora;
    }
    
}

//functia primeste ca parametri un obiect si numarul de ore suplimentare lucrate in luna de referinta si returneaza salariul
function calculSalariu ($obiect, int $ore_supl){
    $salariu_net = ($obiect->salariu_brut + $ore_supl * $obiect->plata_cu_ora) * (1-IMPOZIT);
    return $salariu_net;
}

$angajat1 = new Angajat ('Stefan', 5000.0, 25.17);
$medic1 = new Angajat ('Mihai', 12000.0, 80);
echo "Salariul lui " . $medic1->name . " este: " . calculSalariu ($medic1, 16) . "\n";



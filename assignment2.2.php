<?php
/*Write classes that describe types of vehicles, starting from a base class and extending it.( advanced: at least 8 classes, 3
abstract methods and 2 non-abstract)*/

abstract class Vehicle
{
    public $brand;
    public $model;
    
    public function __construct (string $brand, string $model){
        $this->brand = $brand;
        $this->model = $model;
    }
    
    public function setBrand (string $brand){
        $this->brand = $brand;
    }

    public function getBrand (){
        return $this->brand;
    }

    public function setModel (string $model){
        $this->model = $model;
    }

    public function getModel (){
        return $this->model;
    }

    abstract public function sunet();

   }

abstract class LandVehicle extends Vehicle
{
    public $numarRoti;

    public function __construct (string $brand, string $model, int $numarRoti){
        $this->brand = $brand;
        $this->model = $model;
        $this->numarRoti = $numarRoti;
    }

    public function setNumarRoti (int $nr_roti){
        $this->numarRoti = $nr_roti;
    }

    public function getNumarRoti (){
        return $this->numarRoti;
    }

    abstract public function sunet();
}

abstract class WaterVehicle extends Vehicle
{
    public $indH; //indice de hidrodinamicitate :))  
    
    public function __construct (string $brand, string $model, int $indH){
        $this->brand = $brand;
        $this->model = $model;
        $this->indH = $indH;
    }

    public function setIndH (int $indH){
        $this->indH = $indH;
    }

    public function getIndH (){
        return $this->indH;
    }

    abstract public function sunet();
}

abstract class AirVehicle extends Vehicle
{
    public $indA; //indice de aerodinamicitate ... nu prea am avut inspiratie
    
    public function __construct (string $brand, string $model, float $indA){
        $this->brand = $brand;
        $this->model = $model;
        $this->indA = $indA;
    }

    public function setIndA (int $indA){
        $this->indA = $indA;
    }

    public function getIndA (){
        return $this->indA;
    }

    abstract public function sunet();
}

class Car extends LandVehicle
{
    public $capacitateMotor;

    public function __construct (string $brand, string $model, int $numarRoti, float $capacitateMotor){
        $this->brand = $brand;
        $this->model = $model;
        $this->numarRoti = $numarRoti;
        $this->capacitateMotor = $capacitateMotor;
    }

    public function setCapacitateMotor (int $capmot){
        $this->capacitateMotor = $capmot;
    }

    public function getCapacitateMotor (){
        return $this->capacitateMotor;
    }

    public function sunet(){
        return "Honk Honk";
    }
}

class Bicycle extends LandVehicle
{
    public $nrPinioane;

    public function __construct (string $brand, string $model, int $numarRoti, int $nrPinioane){
        $this->brand = $brand;
        $this->model = $model;
        $this->numarRoti = $numarRoti;
        $this->nrPinioane = $nrPinioane;
    }

    public function setNumarPinioane (int $nrpin){
        $this->nrPinioane = $nrpin;
    }

    public function getNumarPinioane (){
        return $this->nrPinioane;
    }

    public function sunet(){
        return "Clinc Clinc";
    }
   
}

class Truck extends LandVehicle
{
    public $nrSemiremorci;

    public function __construct (string $brand, string $model, int $numarRoti, int $nrSemiremorci){
        $this->brand = $brand;
        $this->model = $model;
        $this->numarRoti = $numarRoti;
        $this->nrSemiremorci = $nrSemiremorci;
    }

    public function setNumarSemiremorci (int $nrSemiremorci){
        $this->nrSemiremorci = $nrSemiremorci;
    }

    public function getNumarSemiremorci (){
        return $this->nrSemiremorci;
    }

    public function sunet(){
        return "TTTTTTTTTTTT";
    }
   
}

class SailingShip extends WaterVehicle
{
    public $nrVele; 
    
    public function __construct (string $brand, string $model, int $indH, int $nrVele){
        $this->brand = $brand;
        $this->model = $model;
        $this->indH = $indH;
        $this->nrVele = $nrVele;
    }

    public function setNrVele (int $nrVele){
        $this->nrVele = $nrVele;
    }

    public function getNrVele (){
        return $this->nrVele;
    }

    public function sunet(){
        return "NIIIIIIIN";
    }

}

class Yacht extends WaterVehicle
{
    public $nrMotoare; 
    
    public function __construct (string $brand, string $model, int $indH, int $nrMotoare){
        $this->brand = $brand;
        $this->model = $model;
        $this->indH = $indH;
        $this->nrMotoare = $nrMotoare;
    }

    public function setNrMotoare (int $nrMotoare){
        $this->nrMotoare = $nrMotoare;
    }

    public function getNrMotoare (){
        return $this->nrMotoare;
    }

    public function sunet(){
        return "niiin";
    }

}

class Helicopter extends AirVehicle
{
    public $nrElice;
    
    public function __construct (string $brand, string $model, int $indA, int $nrElice){
        $this->brand = $brand;
        $this->model = $model;
        $this->indA = $indA;
        $this->nrElice = $nrElice;
    }

    public function setNumarElice (int $nrElice){
        $this->nrElice = $nrElice;
    }

    public function getNumarElice (){
        return $this->nrElice;
    }

    public function sunet(){
        return "Tum Tum Tum Tum";
    }
}

class Airplane extends AirVehicle
{
    public $nrMotoare;
    
    public function __construct (string $brand, string $model, int $indA, int $nrMotoare){
        $this->brand = $brand;
        $this->model = $model;
        $this->indA = $indA;
        $this->nrMotoare = $nrMotoare;
    }

    public function setNumarMotoare (int $nrMotoare){
        $this->nrMotoare = $nrMotoare;
    }

    public function getNumarMotoare (){
        return $this->nrMotoare;
    }

    public function sunet(){
        return "HRRRRRRR";
    }
}



$car1 = new Car ('Dacia', 'Logan', 4, 1.4);
echo "Brand: " . $car1->getBrand() . "\n";
echo "Model: " . $car1->getModel() . "\n";
echo "Numar roti: " . $car1->getNumarRoti() . "\n";
echo "Capacitate motor: " . $car1->getCapacitateMotor() . "\n";
echo "Sunet: " . $car1->sunet() . "\n";
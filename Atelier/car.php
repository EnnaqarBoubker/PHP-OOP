<?php

declare(strict_types=1);
require_once 'vehicle.php';
//Héritage (inheretence)

class Car extends Vehicle {
    private int $doors ;
    private int $passengerCapacity;
    private bool $steeringWheel;
    private string $transmission ;

    public function __construct($make, $model, $color, $noOfWheels, $engineNumber, $doors, $passengerCapacity, $steeringWheel, $transmission){
        parent::__construct($make, $model, $color, $noOfWheels, $engineNumber);
        $this -> doors =  $doors;
        $this -> passengerCapacity = $passengerCapacity;
        $this -> steeringWheel = $steeringWheel;
        $this -> transmission = $transmission;
    }
    public function getDoors(){
        return $this -> doors;
    }
    public function getPassenger(){
        return $this -> passengerCapacity;
    }
    public function getSteer(){
        return $this -> steeringWheel;
    }
    public function getTransmission(){
        return $this -> transmission;
    }
}
?>
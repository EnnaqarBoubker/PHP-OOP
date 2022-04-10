<?php
declare(strict_types=1); // so I creat this for modified typs the Properties;
require_once './vehicle.php';

class Motorcycle extends Vehicle{
    public int $Ofwheels = 2;
    public int $strock = 4;
    public string $type = 'standard';

    // public function __construct($make, $model, $color, $noOfWheels, $engineNumber, $OfWheels, $strock, $type){
    //         parent::__construct($make, $model, $color, $noOfWheels, $engineNumber);
    //             // $this -> Ofwheels = $OfWheels;
    //             // $this -> strock = $strock;
    //             // $this -> type = $type;
    //     }
    
    public function getWheels(){
        return $this -> Ofwheels;
    }
    public function getStrock(){
        return $this -> strock;
    }
    public function getTYpe(){
        return $this -> type;
    }


}
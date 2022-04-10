<?php
declare(strict_types=1);
class Vehicle {
    private $make ;
    private $model ;
    private $color ;
    private $noOfWheels ;
    private $engineNumber ;
    public static $counter = 0;



    //getter
    public function getMake(){
        return $this -> make;
        }
    public function getModel(){
        return $this -> model;
    }
    public function getColor(){
        return $this -> color;
    }
    public function getNoOfWheels(){
        return $this -> noOfWheels;
    }
    public function getEngineNumber(){
        return $this -> engineNumber;
    }

    public function __construct($make, $model, $color, $noOfWheels, $engineNumber){
        $this -> make = $make;
        $this -> model = $model;
        $this -> color = $color;
        $this -> noOfWheels = $noOfWheels;
        $this -> engineNumber = $engineNumber;
        self:: $counter++;
    }


    //setter
    // public function setMake($make){
    //     return $this -> make = $make;
    // }
    // public function setModel($model){
    //     return $this -> model = $model;
    // }
    // public function setColor($color){
    //     return $this -> color = $color;
    // }
    // public function setNoOfWheels($noOfWheels){
    //     return $this -> noOfWheels = $noOfWheels;
    // }
    // public function setEngineNumber($engineNumber){
    //     return $this -> engineNumber = $engineNumber;
    // }
    }

    // this is class abstract an insid that the methods abstract;

// abstract class person{
//     private string $name;
//     private int $age;

//     public function sayHello(){
//         $this -> name;
//     }

//     abstract public function sayTest();
//     abstract public function sayBay();
// }


?>

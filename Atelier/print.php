<?php
require_once './atelier/vehicle.php';
require_once './atelier/car.php';
require_once './atelier/motocycle.php';

//created the object
echo Vehicle::$counter; 
$bus = new Vehicle('chine', 'RCFD', 'RCXX3', 'red', 2435, 5555555);

//Added the methods setter
// $bus -> setMake('chine');
// $bus -> setModel('RCED');
// $bus -> setColor('blue');
// $bus -> setNoOfWheels(1234);
// $bus -> setEngineNumber(2354);


//construct
// $bus -> setMake();
// $bus -> setModel();
// $bus -> setColor();
// $bus -> setNoOfWheels();
// $bus -> setEngineNumber();

//Added the methods getter
// echo $bus -> getMake(); 
// echo '<br>';
// echo $bus -> getModel();
// echo '<br>';
// echo $bus -> getColor();
// echo '<br>';
// echo $bus -> getNoOfWheels();
// echo '<br>';
// echo $bus -> getEngineNumber();
echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($bus);
echo '</pre>';


echo '<pre>';
print_r($bus);
echo '</pre>';

echo Vehicle::$counter; 
$range = new Car('canada', 'RUYD', 'RCXSZ', 'Black', 2312, 4, 5, true, 'manual');

//CAR

// echo $range -> getMake(); 
// echo '<br>';
// echo $range -> getModel();
// echo '<br>';
// echo $range -> getColor();
// echo '<br>';
// echo $range -> getNoOfWheels();
// echo '<br>';
// echo $range -> getEngineNumber();
// echo '<br>';
// echo $range -> getDoors();
// echo '<br>';
// echo $range -> getPassenger();
// echo '<br>';
// echo $range -> getSteer();
// echo '<br>';
// echo $range -> getTransmission();
echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($range);
echo '</pre>';


echo '<pre>';
print_r($range);
echo '</pre>';

echo Vehicle::$counter; 
$motor = new Motorcycle('canada', 'RUYD', 'RCXSZ', 'Black', 2312, 12, 234, 'bno');

// echo $motor -> getMake(); 
// echo '<br>';
// echo $motor -> getModel();
// echo '<br>';
// echo $motor -> getColor();
// echo '<br>';
// echo $motor -> getNoOfWheels();
// echo '<br>';
// echo $motor -> getEngineNumber();
// echo '<br>';
// echo $motor -> getWheels();
// echo '<br>';
// echo $motor -> getStrock();
// echo '<br>';
// echo $motor -> getTYpe();
echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($motor);
echo '</pre>';


echo '<pre>';
print_r($motor);
echo '</pre>';

?> 

<?php


require_once 'Truck.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'MotorWay.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'Truck.php';

$bike = new Bicycle('blue', '1');
$car = new Car('purple', '4', 'fuel');


$optimusPrime = new Truck('red','3','Fuel','100',);
var_dump($optimusPrime);
echo $optimusPrime->forward();
echo $optimusPrime->brake();

var_dump($optimusPrime);

$optimusPrime->setStockageCapacity(25);

echo $optimusPrime->ChargingInfo();


$walker = new PedestrianWay();
$walker->addMoreVehicle($bike);
var_dump($walker);
$resident = new ResidentialWay();
$resident->addMoreVehicle($car);
var_dump($walker);
$motor = new MotorWay();
$motor->addMoreVehicle($bike);






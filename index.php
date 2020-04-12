<?php
require_once 'car.php';
require_once 'Bicycle.php';
require_once 'Vehicle.php';
require_once 'Truck.php';

require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';

$bigTruck = new Truck('red', '3', 'fuel', '100');

$car = new Car('black',5,'fuel');

echo $bigTruck->teststorage();
var_dump($bigTruck);
;



$bigTruck->setCargo(100);

echo $bigTruck->teststorage();

var_dump($bigTruck);

$bike = new Bicycle('red', 2);

$pf = new MotorWay();
$pf->setCurrentVehicles($car);
var_dump($car);

$pq = new ResidentialWay();
$pq->setCurrentVehicles($bigTruck);
var_dump($pq);

$pa = new PedestrianWay();
$pa->setCurrentVehicles($bigTruck);
var_dump($pa);

?>
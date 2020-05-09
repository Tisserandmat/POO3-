<?php
require_once 'Car.php';
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

$oklm = new Car('red',5,'fuel');

$oklm->setEnergy('electric');
$oklm->setEnergyLevel(1);
$oklm->setParkBrake(true);
$oklm->setCurrentSpeed(0);

try{
    $oklm->start();
}catch (Exception $e){
    echo "Exception : " . $e->getMessage();
    $oklm->setParkBrake(false);
  $oklm->start();
} finally {
    echo "Ma voiture roule comme un donut";
}

$carInterface = new Car('black', '4', 'Diesel');
$carInterface->setCurrentSpeed(1);

var_dump($carInterface->switchOff());
$carInterfaceBis = new Car('red', '2', 'Diesel');
$carInterfaceBis->setCurrentSpeed(4);

var_dump($carInterfaceBis->switchOn());

$bikeOne = new Bicycle('white', 1);
$bikeOne->setCurrentSpeed(3);
var_dump($bikeOne->switchOn());

$bikeTwo = new Bicycle('white', 1);
$bikeTwo->setCurrentSpeed(11);
var_dump($bikeTwo->switchOn());

$bikeThree = new Bicycle('red', '1');
$bikeThree->setCurrentSpeed(5);
var_dump($bikeThree->switchOff());

?>
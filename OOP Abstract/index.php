<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'HighWay.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
require_once 'Truck.php';
require_once 'Vehicle.php';


$bicycle = new Bicycle('sliver', 1);
$nissan = new Car('matt black', 5, 'electric');
$skateboard = new Skateboard('brown', 1);
$pedestrianWay = new PedestrianWay();
$pedestrianWay->addVehicle($bicycle);
$pedestrianWay->addVehicle($nissan);
$pedestrianWay->addVehicle($skateboard);

$car = new Car('white', 5, 'fuel');
$golf = new Car( 'green', 5, 'electric');
$bike = new Bicycle('black', 1);
$manu = new Skateboard('dark', 1);
$motorway = new MotorWay();
$motorway->addVehicle($car);
$motorway->addVehicle($golf);
$motorway->addVehicle($bike);
$motorway->addVehicle($manu);

$truck = new Truck('grey', 3, 'fuel',20);
$ferrari = new Car( 'red', 2, 'fuel');
$bob = new Bicycle( 'blue', 1);
$residentialWay = new ResidentialWay();
$residentialWay->addVehicle($truck);
$residentialWay->addVehicle($ferrari);
$residentialWay->addVehicle($bob);

var_dump($pedestrianWay);
var_dump($motorway);
var_dump($residentialWay);
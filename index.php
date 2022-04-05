<?php
require_once 'Truck.php';
require_once 'Car.php';
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1, 2);

$car = new Car('green', 4, 'electric');


echo $car->forward();
echo $car->brake();


var_dump($bicycle);
var_dump($car);

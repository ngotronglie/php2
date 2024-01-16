<?php 

require_once './VehicleInterface.php';
require_once './OnLaneAbstract.php';
require_once './OnRiverAbstract.php';
require_once './Motobike.php';
require_once './Car.php';

echo "<pre>";

$car = new Car();
$car->name = "Mec";
$car->ga();
$car->move();
print_r($car);

$motobike = new Motobike();
$motobike->name = "PKL X";
$motobike->ga();
$motobike->move();
$motobike->bocDau();
print_r($motobike);
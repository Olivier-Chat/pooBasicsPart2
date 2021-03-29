<?php
require_once 'Truck.php';
require_once 'Car.php';
$monster = new Truck('red',3,Truck::ALLOWED_ENERGIES[0],100);
var_dump($monster).PHP_EOL;
echo $monster->forward().PHP_EOL;
echo $monster->brake().PHP_EOL;
echo $monster->controlFilling().PHP_EOL;
$monster -> setShipping(50);
echo $monster->controlFilling().PHP_EOL;
$monster -> setShipping($monster->getStorageCapacity());
echo $monster->controlFilling().PHP_EOL;


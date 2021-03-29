<?php
require 'Car.php';
require 'Bicycle.php';

$myBike1 = new Bicycle('red');
$myBike2 = new Bicycle('red');
$myBike3 = new Bicycle('red');
$myCar1 = new Car('blue',4,"fuel");
$myCar2 = new Car('blue',4,"fuel");
$myCar3 = new Car('blue',4,"fuel");
$myCar4 = new Car('blue',4,"fuel");


echo'My bike2: '.$myBike2->forward()."my Current speed is: ".$myBike2->getCurrentSpeed().' km/h'.PHP_EOL;
echo'My car4: '.$myCar4->forward()."my Current speed is: ".$myCar4->getCurrentSpeed().' km/h'.PHP_EOL;

echo'My bike2: '.$myBike2->brake().PHP_EOL;
echo'My car4: '.$myCar4->brake().PHP_EOL;
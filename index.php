<?php

require_once 'Car.php';
require_once 'Bicycle.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$carOne = new Car('Yellow', 4, 'Gasoline');

echo $carOne->start();
echo '<br>' . $carOne->forward();
echo '<br> Speed: ' . $carOne->getCurrentSpeed();
echo '<br> ' . $carOne->brake();
echo '<br> Speed: ' . $carOne->getCurrentSpeed();
echo '<br> Wheels: ' . $carOne->getNbWheels();
echo '<br> Color: ' . $carOne->getColor();
echo '<br> Seats: ' . $carOne->getNbSeats();
echo '<br> Fuel: ' . $carOne->getEnergy();
echo '<br> Fuel Level: ' . $carOne->getEnergyLevel();

$bicycle = new Bicycle("Black", 1);

$bicycle->setColor("Yellow");
$bicycle->getCurrentSpeed();

echo '<br> <br>' . $bicycle->forward();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();
echo '<br> Vitesse du vélo : ' . $bicycle->getCurrentSpeed() . ' km/h' . '<br>';
echo $bicycle->brake();

$carTwo = new Car('Black', 4, 'Gasoline');

echo '<br> <br>' . $carTwo->start();
echo '<br>' . $carTwo->forward();
echo '<br> Speed: ' . $carTwo->getCurrentSpeed();
echo '<br> ' . $carTwo->brake();
echo '<br> Speed: ' . $carTwo->getCurrentSpeed();
echo '<br> Wheels: ' . $carTwo->getNbWheels();
echo '<br> Color: ' . $carTwo->getColor();
echo '<br> Seats: ' . $carTwo->getNbSeats();
echo '<br> Fuel: ' . $carTwo->getEnergy();
echo '<br> Fuel Level: ' . $carTwo->getEnergyLevel();

?>

<?php

require_once 'car.php';
require_once 'bike.php';

$carOne = new Car('Yellow');

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

$bike = new Bike("Black"); // Instanciation d'un nouvel objet $bike de la classe Bicycle

$bike->setColor("Yellow");
$bike->getCurrentSpeed();

echo '<br> <br>' . $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

$carTwo = new Car('Black');

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

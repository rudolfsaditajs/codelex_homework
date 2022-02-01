<?php

require_once 'Battery.php';
require_once 'Odometer.php';
require_once 'Tire.php';
require_once 'Lights.php';
require_once 'FuelGauge.php';
require_once 'Car.php';








$name = readline('Car name: ');
$fuelGaugeAmount = (int) readline('Fuel Gauge amount: ');
$driveDistance = (int) readline('Drive distance: ');

$car = new Car($name, $fuelGaugeAmount);

echo "------ " . $car->getName() . " ------";
echo PHP_EOL;

$PIN = 1234;
echo "To start the car enter PIN".PHP_EOL;
$enteredPIN = readline();
if($car->getFuel()<1||$car->getBattery()<1||$PIN!=$enteredPIN){
    exit;
}
echo " Start you engine!!!".PHP_EOL;




while ($car->getFuel() > 0 && $car->validateTireCond()&& $car->validateLightsCond()) {
    echo "Fuel: " . $car->getFuel() . "l" . PHP_EOL;
    echo "Mileage: " . $car->getMileage() . "km" . PHP_EOL;
    echo "Battery level : " . $car->getBattery() . "%" . PHP_EOL;

    foreach ($car->getLights() as $light){
        echo  " ". $light ->getLightsCondition(). " ".$light->getName().PHP_EOL;

    }
    foreach ($car->getTires() as $tire){
        echo  " ". $tire ->getTireCondition(). " ".$tire->getName().PHP_EOL;

    }

    $car->drive($driveDistance);

    sleep(1);
}

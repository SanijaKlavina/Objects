<?php
require_once 'Car.php';
require_once 'Odometer.php';
require_once 'FuelGauge.php';

$car = new Car(
    $fuelGauge = new FuelGauge(50),
    $odometer = new Odometer()
);


while($car->getFuelGauge()->getAmount() > 0){
    echo "We drove 1km". PHP_EOL;
    $car->drive();
    echo "FuelGauge: {$car->getFuelGauge()}, odometer: {$car->getOdometer()->getAmount()}";
    sleep(1);
}
<?php

class Car{
    private FuelGauge $fuelGauge;
    private Odometer $odometer;
    public function __construct(FuelGauge $fuelGauge, Odometer $odometer){
        $this->fuelGauge = $fuelGauge;
        $this->odometer = $odometer;
    }

    public function drive(): void {
        $this->odometer->increment();
        if($odometer->getMileage() % 10 === 0){
            $fuelGauge->use();
        }
    }

    public function getFuelGauge(): FuelGauge {
        return $this->fuelGauge;
    }
    public function getOdometer(): odometer {
        return $this->odometer;
    }

}
<?php

require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicule(Vehicle $vehicle)
    {
        if (is_a($vehicle, "Car")){
            $this->currentVehicles = $vehicle;
        }
    }
}
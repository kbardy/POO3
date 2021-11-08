<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }
    public function addVehicule(Vehicle $vehicle)
    {
        if (is_a($vehicle, "Vehicle")){
            $this->currentVehicles = $vehicle;
        }
    }
}

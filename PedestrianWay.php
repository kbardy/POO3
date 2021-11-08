<?php

require_once "HighWay.php";

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }
    public function addVehicule(Vehicle $vehicle)
    {
        if (is_a($vehicle, "Bike") or is_a($vehicle, "Skateboard")){
            $this->currentVehicles = $vehicle;
        }
    }
}
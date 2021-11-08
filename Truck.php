<?php

require_once "Car.php";

class Truck extends Car
{
    private int $storageCapacity;
    private int $loadLevel;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->storageCapacity = $storageCapacity;
        $this->loadLevel = 0;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }


    public function setStorageCapacity($storageCapacity): Truck
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

   public function setLoadLevel($loadLevel): Truck
    {
        if ($loadLevel > $this->storageCapacity){
            return $this;
        }
        $this->loadLevel = $loadLevel;

        return $this;
    }

  
    public function getLoadLevel(): int
    {
        return $this->loadLevel;
    }

    public function isFilled(): string
    {
        if ($this->storageCapacity === $this->loadLevel){
            return "full";
        }
        return "is filling";
    }
}
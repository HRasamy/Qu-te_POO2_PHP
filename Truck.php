<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    private int $storageLoading = 0;
    private string $energy;
    


    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->storageCapacity = $storageCapacity;
        
    }

    /**
     * Get the value of storageCapacity
     */ 
    public function getStorageCapacity():int
    {
        return $this->storageCapacity;
    }

    /**
     * Set the value of storageCapacity
     *
     * @return  self
     */ 
    public function setStorageCapacity(int $storageCapacity):self
    {
        $this->storageCapacity = $storageCapacity;

        return $this;
    }

    /**
     * Get the value of storageLoading
     */ 
    public function getStorageLoading(): int
    {
        return $this->storageLoading;
    }

    /**
     * Set the value of storageLoading
     *
     * 
     */ 
    public function setStorageLoading(int $storageLoading):self
    {
        $this->storageLoading = $storageLoading;

        return $this;
    }

     /**
     * Get the value of energy
     */ 
    public function getEnergy(): string
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     *
     */ 
    public function setEnergy($energy): self
    {
        $this->energy = $energy;

        return $this;
    }

    public function isLoaded(): string
    {
        $sentence="";
        if ($this->truckLoading < $this->storageCapacity){
            $sentence = 'in filling !';
        } else {
            $sentence = 'Full !';
        }
        return $sentence;
    }
}


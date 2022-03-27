<?php

require_once 'Vehicle.php';

class GarageCar extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];
    private string $energy;
    private int $energyLevel;

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }
    
    //Get functions for each private attribute
    public function getEnergy():string
    {
        return $this->energy;
    }

    public function getEnergyLevel():int
    {
        return $this->energyLevel;
    }

    //Set function for each private attribute
    public function setEnergy(string $energy): GarageCar
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        } 
        return $this;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}
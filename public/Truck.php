<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    private int $storageCapacity;
    protected int $loading = 0;

    //Constructor
    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this-> storageCapacity = $storageCapacity;
    }

    //Get functions for each private attribute
    public function getStorageCapacity():int
    {
        return $this->storageCapacity;
    }

    public function getLoading():int
    {
        return $this->loading;
    }

    //Set functions
    public function setStorageCapacity(int $storageCapacity):void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function setLoading(int $loading):void
    {
        if($loading >= 0){
            $this->loading= $loading;
        }
    }   

    //Method for loading capacity
    public function fullLoading():string
    {
        if($this->getLoading <= $this->storageCapacity){
            return "In filling !";
        }else{
            return "Full!";
        }
    }
}
<?php


class Truck extends Vehicle {

    private $storageCapacity;

    private $cargo = 0;

    private $energy;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this -> storageCapacity = $storageCapacity;
        $this->energy = $energy;

    }

    public function setStorageCapacity(): int
    {

    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function getCargo(){

        return $this->cargo;
    }

    public function setCargo(int $cargo){
        $this->cargo = $cargo;

    }

    public function getEnergy(){
        return $this->energy;
    }
    public function setEnergy(string $energy){

    }
    public  function teststorage(): string{

        if ($this->cargo >= $this->storageCapacity){
            return "full";
        }else{
            return "in filling";
        }
    }
}
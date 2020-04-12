<?php



final class ResidentialWay extends HighWay{


    protected $nbLane = 2;

    protected $maxSpeed = 50;


    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle){
            $this->setCurrentVehicles($vehicle);
        }
        // TODO: Implement addVehicle() method.
    }
}
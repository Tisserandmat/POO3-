<?php


final class PedestrianWay extends HighWay {

    protected $nbLane = 1;

    protected $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle)
    {


        // TODO: Implement addVehicle() method.
        if($vehicle instanceof Bicycle || $vehicle instanceof  Skateboard){

            $this->setCurrentVehicles($vehicle);
        }
    }

}
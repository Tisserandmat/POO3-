<?php



final class MotorWay extends HighWay
{

    protected $nbLane = 4;

    protected $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car){
            $this->setCurrentVehicles($vehicle);
        }

        // TODO: Implement addVehicle() method.
    }

}
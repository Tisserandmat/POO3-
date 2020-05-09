<?php

class Bicycle extends Vehicle implements Lightableinterface
{
    public function __construct(string $color, int $nbSeats)
    {
        parent::__construct($color, $nbSeats);
    }

    public function switchOn()
    {
        // TODO: Implement switchOn() method.

        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
        return false;
    }

    public function switchOff()
    {
        // TODO: Implement switchOff() method.
        return false;
    }

}

?>
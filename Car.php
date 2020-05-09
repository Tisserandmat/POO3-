<?php
require 'LightableInterface.interface.php';
require_once 'Vehicle.php';

class Car extends Vehicle implements Lightableinterface
{
    public function switchOn()
    {
        // TODO: Implement switchOn() method.
        return true;
    }
    public function switchOff()
    {
        // TODO: Implement switchOff() method.
        return false;
    }

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function start(): void
    {
        if (!$this->hasParkBrake === true) {
            if ($this->currentSpeed === 0) {
                $this->currentSpeed = 5;
                echo "la voiture demarre" . '</b>';
            } else {
                echo "La chope roule depuis belle lurette" . '<br />';
            }
        } else {
            throw new \Exception('freins a main enclenché' . '</br>');


        }
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function setParkBrake($hasParkBrake)
    {

        $this->hasParkBrake = $hasParkBrake;
    }
}

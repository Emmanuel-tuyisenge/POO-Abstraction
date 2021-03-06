<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    protected $nbLane = 2;

    protected $currentSpeed = 50; 

    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle){
            $this->setCurrentVehicles($vehicle);
        }
    }
}
<?php

require 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
        parent::setNbLane(4);
        parent::setMaxSpeed(130);
    }

    public function addMoreVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car){
            $currentVehicles[] = $vehicle;
        }
    }


}

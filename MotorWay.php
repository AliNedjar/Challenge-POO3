<?php

require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    public function __construct()
    {
     parent::__construct(4, 130);
    }

    public function addMoreVehicle(Vehicle $vehicle)
    {
        $message = '';
        if ($vehicle instanceof Bicycle) {
            $message= 'peux pas conduire ici';

        } else {
            $this->currentVehicle[]= $vehicle;
            $message = 'circulez!';

        }
    }


}

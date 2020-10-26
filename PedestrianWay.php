<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    public function __construct()
    {
        parent::__construct(1, 10);
    }

    public function addMoreVehicle(Vehicle $vehicle)
    {
        $message = '';
        if ($vehicle instanceof Car and $vehicle instanceof Truck) {
            $message= 'peux pas conduire ici';

        } else {
            $this->currentVehicle[] = $vehicle;
            $message = 'circulez!';

        }
    }


}


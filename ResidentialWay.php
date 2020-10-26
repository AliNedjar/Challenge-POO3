<?php

require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    public function __construct()
{
    parent::__construct(2, 50);
}

    public function addMoreVehicle(Vehicle $vehicle)
    {
        $message = '';
        $this->currentVehicle[] = $vehicle;
        $message = 'circulez!';

        }

}


<?php

abstract class Highway
{
    /**
     * @var array
     */
    protected $currentVehicle;

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;






    abstract public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }


    abstract public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;

    }

    abstract public function getNbLane(): int
        {
            return $this->nbLane;
        }


    abstract public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;

    }

    abstract public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }


    abstract public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;

    }








}

<?php


abstract class HighWay
{
    /**
     * @var array
     */
    protected $currentVehicle = [];

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;


    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }


    public function getCurrentVehicle(): array
    {
        return $this->currentVehicle;
    }


    public function setCurrentVehicle(array $currentVehicle): void
    {
        $this->currentVehicle = $currentVehicle;

    }

    public function getNbLane(): int
        {
            return $this->nbLane;
        }


    public function setNbLane(int $nbLane): void
    {
        $this->nbLane = $nbLane;

    }

    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }


    public function setMaxSpeed(int $maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;

    }

    abstract public function addMoreVehicle(Vehicle $vehicle);








}

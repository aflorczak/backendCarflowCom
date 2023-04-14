<?php

namespace App\Module\CarModule\Domain\Model;

class NewCarDomain
{
    private string $status;
    private string $brand;
    private string $model;
    private string $vin;
    private int $mileage;
    private int $numberOfSeats;
    private int $numberOfDoors;
    private string $fuel;
    private string $bodyType;
    private string $segment;

    public function __construct()
    {
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getVin(): string
    {
        return $this->vin;
    }

    public function setVin(string $vin): void
    {
        $this->vin = $vin;
    }

    public function getMileage(): int
    {
        return $this->mileage;
    }

    public function setMileage(int $mileage): void
    {
        $this->mileage = $mileage;
    }

    public function getNumberOfSeats(): int
    {
        return $this->numberOfSeats;
    }

    public function setNumberOfSeats(int $numberOfSeats): void
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    public function getNumberOfDoors(): int
    {
        return $this->numberOfDoors;
    }

    public function setNumberOfDoors(int $numberOfDoors): void
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    public function getFuel(): string
    {
        return $this->fuel;
    }

    public function setFuel(string $fuel): void
    {
        $this->fuel = $fuel;
    }

    public function getBodyType(): string
    {
        return $this->bodyType;
    }

    public function setBodyType(string $bodyType): void
    {
        $this->bodyType = $bodyType;
    }

    public function getSegment(): string
    {
        return $this->segment;
    }

    public function setSegment(string $segment): void
    {
        $this->segment = $segment;
    }
}
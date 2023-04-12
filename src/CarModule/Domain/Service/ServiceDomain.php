<?php

namespace App\CarModule\Domain\Service;

use App\CarModule\Domain\Interfaces\Memory;
use App\CarModule\Domain\Model\CarDomain;

class ServiceDomain
{
    private Memory $memory;

    public function __construct(
        Memory $memory
    )
    {
        $this->memory = $memory;
    }

    public function createNewCar(CarDomain $carDomain): void
    {
        $this->memory->createNewCar($carDomain);
    }

    public function getAllCars(): array
    {
        return $this->memory->getAllCars();
    }

    public function getCarById(int $id): CarDomain
    {
        return $this->memory->getCarById($id);
    }

    public function updateCarById(CarDomain $carDomain): CarDomain
    {
        return $this->memory->updateCarById($carDomain);
    }

    public function deleteCarById(int $id): void
    {
        $this->memory->deleteCarById($id);
    }
}
<?php

namespace App\Module\CarModule\Domain\Service;

use App\Module\CarModule\Domain\Interfaces\Memory;
use App\Module\CarModule\Domain\Model\CarDomain;
use App\Module\CarModule\Domain\Model\NewCarDomain;

class ServiceDomain
{
    private Memory $memory;

    public function __construct(
        Memory $memory
    )
    {
        $this->memory = $memory;
    }

    public function getCarsNumberByStatus(string $status = null): int
    {
        return $this->memory->getCarsNumberByStatus($status);
    }

    public function createNewCar(NewCarDomain $newCarDomain): CarDomain
    {
        return $this->memory->createNewCar($newCarDomain);
    }

    public function getCarsByStatus(string $status = null): array
    {
        return $this->memory->getCarsByStatus($status);
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
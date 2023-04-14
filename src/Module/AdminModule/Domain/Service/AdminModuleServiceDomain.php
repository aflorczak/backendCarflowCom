<?php

namespace App\Module\AdminModule\Domain\Service;

use App\Module\AdminModule\Domain\Interfaces\CarDataInterface;
use App\Module\AdminModule\Domain\Model\CarDomainInAdminModule;

class AdminModuleServiceDomain
{
    private CarDataInterface $carData;

    public function __construct(CarDataInterface $carData)
    {
        $this->carData = $carData;
    }

    public function getCarsNumberByStatus(string $status = null): int
    {
        return $this->carData->getCarsNumberByStatus($status);
    }

    public function getCarById(int $id): CarDomainInAdminModule
    {
        return $this->carData->getCarById($id);
    }

    public function getCarsByStatus(string $status = null): array
    {
        return $this->carData->getCarsByStatus($status);
    }

    public function deleteCarById(int $id): void{
        $this->carData->deleteCarById($id);
    }
}
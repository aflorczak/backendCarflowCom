<?php

namespace App\Module\AdminModule\Infrastructure\Out\CarData\Service;

use App\Module\AdminModule\Domain\Interfaces\CarDataInterface;
use App\Module\AdminModule\Domain\Model\CarDomainInAdminModule;
use App\Module\AdminModule\Infrastructure\Out\CarData\Helper\CarConverterForAdminModuleOutCarData;
use App\Module\CarModule\Infrastructure\In\DataForAdminModule\DataForAdminModule;

class CarData implements CarDataInterface
{

    private DataForAdminModule $data;
    private CarConverterForAdminModuleOutCarData $converter;

    public function __construct(
        DataForAdminModule $data,
        CarConverterForAdminModuleOutCarData $converter
    )
    {
        $this->data = $data;
        $this->converter = $converter;

    }

    public function getCarById(string $id): CarDomainInAdminModule
    {
        return $this->converter->toDomainInAdminModule($this->data->getCarById($id));
    }

    public function getCarsNumberByStatus(string $status = null): int
    {
        return $this->data->getCarsNumberByStatus($status);
    }

    public function getCarsByStatus(string $status = null): array
    {
        $carForReturn = array();

        $cars = $this->data->getCarsByStatus($status);

        foreach ($cars as $car)
        {
            array_push($carForReturn, $this->converter->toDomainInAdminModule($car));
        }

        return $carForReturn;
    }

    public function deleteCarById(int $id): void
    {
        $this->data->deleteCarById($id);
    }
}
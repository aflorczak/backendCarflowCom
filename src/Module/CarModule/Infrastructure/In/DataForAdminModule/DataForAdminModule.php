<?php

namespace App\Module\CarModule\Infrastructure\In\DataForAdminModule;

use App\Module\CarModule\Domain\Service\ServiceDomain;
use App\Module\CarModule\Infrastructure\In\DataForAdminModule\Dto\CarDtoForAdminModule;
use App\Module\CarModule\Infrastructure\In\DataForAdminModule\Helper\CarConverterForAdminModule;

class DataForAdminModule
{
    private ServiceDomain $service;
    private CarConverterForAdminModule $carConverterForAdminModule;

    public function __construct(
        ServiceDomain $service,
        CarConverterForAdminModule $carConverterForAdminModule
    )
    {
        $this->service = $service;
        $this->carConverterForAdminModule = $carConverterForAdminModule;
    }

    public function getCarsNumberByStatus(string $status = null): int
    {
        return $this->service->getCarsNumberByStatus($status);
    }

    public function getCarById(int $id): CarDtoForAdminModule
    {
        return $this->carConverterForAdminModule->toCarDto($this->service->getCarById($id));
    }

    public function getCarsByStatus(string $status = null): array
    {
        $carDtoForAdminModuleArray = [];

        $carDomainArray = $this->service->getCarsByStatus($status);

        foreach ($carDomainArray as $carDomain)
        {
            // tutaj jakiś problem
            array_push($carDtoForAdminModuleArray, $this->carConverterForAdminModule->toCarDto($carDomain));
        }

        return $carDtoForAdminModuleArray;
    }

    public function deleteCarById(int $id): void
    {
        $this->service->deleteCarById($id);
    }
}
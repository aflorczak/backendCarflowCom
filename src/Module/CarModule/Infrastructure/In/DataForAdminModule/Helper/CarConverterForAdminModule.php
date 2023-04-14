<?php

namespace App\Module\CarModule\Infrastructure\In\DataForAdminModule\Helper;

use App\Module\CarModule\Domain\Model\CarDomain;
use App\Module\CarModule\Infrastructure\In\DataForAdminModule\Dto\CarDtoForAdminModule;

class CarConverterForAdminModule
{
    public function toCarDto(CarDomain $carDomain): CarDtoForAdminModule
    {
        $carDto = new CarDtoForAdminModule();
        $carDto->setId($carDomain->getId());
        $carDto->setStatus($carDomain->getStatus());
        $carDto->setBrand($carDomain->getBrand());
        $carDto->setModel($carDomain->getModel());
        $carDto->setVin($carDomain->getVin());
        return $carDto;
    }
}
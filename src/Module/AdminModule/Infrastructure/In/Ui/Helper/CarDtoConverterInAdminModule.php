<?php

namespace App\Module\AdminModule\Infrastructure\In\Ui\Helper;

use App\Module\AdminModule\Domain\Model\CarDomainInAdminModule;
use App\Module\AdminModule\Infrastructure\In\Ui\Dto\CarDtoForAdminModule;

class CarDtoConverterInAdminModule
{
    public function toDto(CarDomainInAdminModule $carDomainInAdminModule): CarDtoForAdminModule
    {
        $carDtoForAdminModule = new CarDtoForAdminModule();
        $carDtoForAdminModule->setId($carDomainInAdminModule->getId());
        $carDtoForAdminModule->setStatus($carDomainInAdminModule->getStatus());
        $carDtoForAdminModule->setBrand($carDomainInAdminModule->getBrand());
        $carDtoForAdminModule->setModel($carDomainInAdminModule->getModel());
        $carDtoForAdminModule->setVin($carDomainInAdminModule->getVin());
        return $carDtoForAdminModule;
    }
}
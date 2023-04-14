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
        $carDtoForAdminModule->setMileage($carDomainInAdminModule->getMileage());
        $carDtoForAdminModule->setFuel($carDomainInAdminModule->getFuel());
        $carDtoForAdminModule->setNumberOfSeats($carDomainInAdminModule->getNumberOfSeats());
        $carDtoForAdminModule->setNumberOfDoors($carDomainInAdminModule->getNumberOfDoors());
        $carDtoForAdminModule->setBodyType($carDomainInAdminModule->getBodyType());
        $carDtoForAdminModule->setSegment($carDomainInAdminModule->getSegment());
        return $carDtoForAdminModule;
    }
}
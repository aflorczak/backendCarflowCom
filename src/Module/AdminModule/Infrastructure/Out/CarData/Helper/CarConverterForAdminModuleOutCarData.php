<?php

namespace App\Module\AdminModule\Infrastructure\Out\CarData\Helper;

use App\Module\AdminModule\Domain\Model\CarDomainInAdminModule;
use App\Module\CarModule\Infrastructure\In\DataForAdminModule\Dto\CarDtoForAdminModule;

class CarConverterForAdminModuleOutCarData
{
    public function toDomainInAdminModule(CarDtoForAdminModule $carDtoForAdminModule): CarDomainInAdminModule
    {
        $carDomainInAdminModule = new CarDomainInAdminModule();
        $carDomainInAdminModule->setId($carDtoForAdminModule->getId());
        $carDomainInAdminModule->setStatus($carDtoForAdminModule->getStatus());
        $carDomainInAdminModule->setBrand($carDtoForAdminModule->getBrand());
        $carDomainInAdminModule->setModel($carDtoForAdminModule->getModel());
        $carDomainInAdminModule->setVin($carDtoForAdminModule->getVin());
        $carDomainInAdminModule->setMileage($carDtoForAdminModule->getMileage());
        $carDomainInAdminModule->setFuel($carDtoForAdminModule->getFuel());
        $carDomainInAdminModule->setNumberOfSeats($carDtoForAdminModule->getNumberOfSeats());
        $carDomainInAdminModule->setNumberOfDoors($carDtoForAdminModule->getNumberOfDoors());
        $carDomainInAdminModule->setBodyType($carDtoForAdminModule->getBodyType());
        $carDomainInAdminModule->setSegment($carDtoForAdminModule->getSegment());
        return $carDomainInAdminModule;
    }
}
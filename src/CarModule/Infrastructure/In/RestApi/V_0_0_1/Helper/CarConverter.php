<?php

namespace App\CarModule\Infrastructure\In\RestApi\V_0_0_1\Helper;

use App\CarModule\Domain\Model\CarDomain;
use App\CarModule\Infrastructure\In\RestApi\V_0_0_1\Dto\CarDto;

class CarConverter
{
    public function toCarDomain(CarDto $carDto): CarDomain
    {
        $carDomain = new CarDomain();
        $carDomain->setId($carDto->getId());
        $carDomain->setStatus($carDto->getStatus());
        $carDomain->setBrand($carDto->getBrand());
        $carDomain->setModel($carDto->getModel());
        $carDomain->setVin($carDto->getVin());
        return $carDomain;
    }

    public function toCarDto(CarDomain $carDomain): CarDto
    {
        $carDto = new CarDto();
        $carDto->setId($carDomain->getId());
        $carDto->setStatus($carDomain->getStatus());
        $carDto->setBrand($carDomain->getBrand());
        $carDto->setModel($carDomain->getModel());
        $carDto->setVin($carDomain->getVin());
        return $carDto;
    }
}
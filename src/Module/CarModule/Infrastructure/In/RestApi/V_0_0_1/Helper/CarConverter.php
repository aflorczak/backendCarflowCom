<?php

namespace App\Module\CarModule\Infrastructure\In\RestApi\V_0_0_1\Helper;

use App\Module\CarModule\Domain\Model\CarDomain;
use App\Module\CarModule\Domain\Model\NewCarDomain;
use App\Module\CarModule\Infrastructure\In\RestApi\V_0_0_1\Dto\CarDto;
use App\Module\CarModule\Infrastructure\In\RestApi\V_0_0_1\Dto\NewCarDto;

class CarConverter
{

    public function toNewCarDomain(NewCarDto $carDto): NewCarDomain
    {
        $newCarDomain = new NewCarDomain();
        $newCarDomain->setStatus($carDto->getStatus());
        $newCarDomain->setBrand($carDto->getBrand());
        $newCarDomain->setModel($carDto->getModel());
        $newCarDomain->setVin($carDto->getVin());
        $newCarDomain->setMileage($carDto->getMileage());
        $newCarDomain->setFuel($carDto->getFuel());
        $newCarDomain->setNumberOfSeats($carDto->getNumberOfSeats());
        $newCarDomain->setNumberOfDoors($carDto->getNumberOfDoors());
        $newCarDomain->setBodyType($carDto->getBodyType());
        $newCarDomain->setSegment($carDto->getSegment());
        return $newCarDomain;
    }

    public function toCarDomain(CarDto $carDto): CarDomain
    {
        $carDomain = new CarDomain();
        $carDomain->setId($carDto->getId());
        $carDomain->setStatus($carDto->getStatus());
        $carDomain->setBrand($carDto->getBrand());
        $carDomain->setModel($carDto->getModel());
        $carDomain->setVin($carDto->getVin());
        $carDomain->setMileage($carDto->getMileage());
        $carDomain->setFuel($carDto->getFuel());
        $carDomain->setNumberOfSeats($carDto->getNumberOfSeats());
        $carDomain->setNumberOfDoors($carDto->getNumberOfDoors());
        $carDomain->setBodyType($carDto->getBodyType());
        $carDomain->setSegment($carDto->getSegment());
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
        $carDto->setMileage($carDomain->getMileage());
        $carDto->setFuel($carDomain->getFuel());
        $carDto->setNumberOfSeats($carDomain->getNumberOfSeats());
        $carDto->setNumberOfDoors($carDomain->getNumberOfDoors());
        $carDto->setBodyType($carDomain->getBodyType());
        $carDto->setSegment($carDomain->getSegment());
        return $carDto;
    }
}
<?php

namespace App\Module\CarModule\Infrastructure\Out\Database\Helper;

use App\Module\CarModule\Domain\Model\CarDomain;
use App\Module\CarModule\Domain\Model\NewCarDomain;
use App\Module\CarModule\Infrastructure\Out\Database\Entity\Car;

class CarConverter
{
    public function toNewEntity(NewCarDomain $newCarDomain): Car
    {
        $car = new Car();
        $car->setId(0);
        $car->setStatus($newCarDomain->getStatus());
        $car->setBrand($newCarDomain->getBrand());
        $car->setModel($newCarDomain->getModel());
        $car->setVin($newCarDomain->getVin());
        $car->setMileage($newCarDomain->getMileage());
        $car->setFuel($newCarDomain->getFuel());
        $car->setNumberOfSeats($newCarDomain->getNumberOfSeats());
        $car->setNumberOfDoors($newCarDomain->getNumberOfDoors());
        $car->setBodyType($newCarDomain->getBodyType());
        $car->setSegment($newCarDomain->getSegment());
        return $car;
    }

    public function toEntity(CarDomain $carDomain): Car
    {
        $car = new Car();
        $car->setId($carDomain->getId());
        $car->setStatus($carDomain->getStatus());
        $car->setBrand($carDomain->getBrand());
        $car->setModel($carDomain->getModel());
        $car->setVin($carDomain->getVin());
        $car->setMileage($carDomain->getMileage());
        $car->setFuel($carDomain->getFuel());
        $car->setNumberOfSeats($carDomain->getNumberOfSeats());
        $car->setNumberOfDoors($carDomain->getNumberOfDoors());
        $car->setBodyType($carDomain->getBodyType());
        $car->setSegment($carDomain->getSegment());
        return $car;
    }

    public function toDomain(Car $car): CarDomain
    {
        $carDomain = new CarDomain();
        $carDomain->setId($car->getId());
        $carDomain->setStatus($car->getStatus());
        $carDomain->setBrand($car->getBrand());
        $carDomain->setModel($car->getModel());
        $carDomain->setVin($car->getVin());
        $carDomain->setMileage($car->getMileage());
        $carDomain->setFuel($car->getFuel());
        $carDomain->setNumberOfSeats($car->getNumberOfSeats());
        $carDomain->setNumberOfDoors($car->getNumberOfDoors());
        $carDomain->setBodyType($car->getBodyType());
        $carDomain->setSegment($car->getSegment());
        return $carDomain;
    }
}
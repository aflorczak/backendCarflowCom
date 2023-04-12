<?php

namespace App\CarModule\Infrastructure\Out\Database\Helper;

use App\CarModule\Domain\Model\CarDomain;
use App\CarModule\Infrastructure\Out\Database\Entity\Car;

class CarConverter
{
    public function toEntity(CarDomain $carDomain): Car
    {
        $car = new Car();
        $car->setId($carDomain->getId());
        $car->setStatus($carDomain->getStatus());
        $car->setBrand($carDomain->getBrand());
        $car->setModel($carDomain->getModel());
        $car->setVin($carDomain->getVin());
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
        return $carDomain;
    }
}
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
<?php

namespace App\Module\CarModule\Domain\Interfaces;

use App\Module\CarModule\Domain\Model\CarDomain;
use App\Module\CarModule\Domain\Model\NewCarDomain;

interface Memory
{
    public function createNewCar(NewCarDomain $newCarDomain): CarDomain;
    public function getAllCars(): array;
    public function getCarById(int $id): CarDomain;
    public function updateCarById(CarDomain $carDomain): CarDomain;
    public function deleteCarById(int $id): void;
}
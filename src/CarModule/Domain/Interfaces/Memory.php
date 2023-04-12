<?php

namespace App\CarModule\Domain\Interfaces;

use App\CarModule\Domain\Model\CarDomain;

interface Memory
{
    public function createNewCar(CarDomain $carDomain): void;
    public function getAllCars(): array;
    public function getCarById(int $id): CarDomain;
    public function updateCarById(CarDomain $carDomain): CarDomain;
    public function deleteCarById(int $id): void;
}
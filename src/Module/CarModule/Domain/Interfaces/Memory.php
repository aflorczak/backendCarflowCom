<?php

namespace App\Module\CarModule\Domain\Interfaces;

use App\Module\CarModule\Domain\Model\CarDomain;
use App\Module\CarModule\Domain\Model\NewCarDomain;

interface Memory
{
    public function getCarsNumberByStatus(string $status): int;
    public function createNewCar(NewCarDomain $newCarDomain): CarDomain;
    public function getCarsByStatus(string $status): array;
    public function getCarById(int $id): CarDomain;
    public function updateCarById(CarDomain $carDomain): CarDomain;
    public function deleteCarById(int $id): void;
}
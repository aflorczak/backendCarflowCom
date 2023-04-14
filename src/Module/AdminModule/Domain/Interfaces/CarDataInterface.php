<?php

namespace App\Module\AdminModule\Domain\Interfaces;

use App\Module\AdminModule\Domain\Model\CarDomainInAdminModule;

interface CarDataInterface
{
    public function getCarsNumberByStatus(string $status): int;
    public function getCarById(string $id): CarDomainInAdminModule;
    public function getCarsByStatus(string $status): array;
    public function deleteCarById(int $id): void;
}
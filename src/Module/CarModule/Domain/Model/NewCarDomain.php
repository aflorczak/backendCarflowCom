<?php

namespace App\Module\CarModule\Domain\Model;

class NewCarDomain
{
    private string $status;
    private string $brand;
    private string $model;
    private string $vin;

    public function __construct(){}

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getVin(): string
    {
        return $this->vin;
    }

    public function setVin(string $vin): void
    {
        $this->vin = $vin;
    }


}
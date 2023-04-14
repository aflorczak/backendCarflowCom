<?php

namespace App\Module\CarModule\Infrastructure\Out\Database\Entity;

use App\Module\CarModule\Infrastructure\Out\Database\Repository\CarRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarRepository::class)]
class Car
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $status = null;

    #[ORM\Column(length: 50)]
    private ?string $brand = null;

    #[ORM\Column(length: 50)]
    private ?string $model = null;

    #[ORM\Column(length: 50)]
    private ?string $vin = null;

    #[ORM\Column]
    private ?int $mileage = null;

    #[ORM\Column]
    private ?int $numberOfSeats = null;

    #[ORM\Column]
    private ?int $numberOfDoors = null;

    #[ORM\Column(length: 50)]
    private ?string $fuel = null;

    #[ORM\Column(length: 50)]
    private ?string $bodyType = null;

    #[ORM\Column(length: 50)]
    private ?string $segment = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string|null $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string|null
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string|null $brand
     */
    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return string|null
     */
    public function getModel(): ?string
    {
        return $this->model;
    }

    /**
     * @param string|null $model
     */
    public function setModel(?string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string|null
     */
    public function getVin(): ?string
    {
        return $this->vin;
    }

    /**
     * @param string|null $vin
     */
    public function setVin(?string $vin): void
    {
        $this->vin = $vin;
    }

    /**
     * @return int|null
     */
    public function getMileage(): ?int
    {
        return $this->mileage;
    }

    /**
     * @param int|null $mileage
     */
    public function setMileage(?int $mileage): void
    {
        $this->mileage = $mileage;
    }

    /**
     * @return int|null
     */
    public function getNumberOfSeats(): ?int
    {
        return $this->numberOfSeats;
    }

    /**
     * @param int|null $numberOfSeats
     */
    public function setNumberOfSeats(?int $numberOfSeats): void
    {
        $this->numberOfSeats = $numberOfSeats;
    }

    /**
     * @return int|null
     */
    public function getNumberOfDoors(): ?int
    {
        return $this->numberOfDoors;
    }

    /**
     * @param int|null $numberOfDoors
     */
    public function setNumberOfDoors(?int $numberOfDoors): void
    {
        $this->numberOfDoors = $numberOfDoors;
    }

    /**
     * @return string|null
     */
    public function getFuel(): ?string
    {
        return $this->fuel;
    }

    /**
     * @param string|null $fuel
     */
    public function setFuel(?string $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return string|null
     */
    public function getBodyType(): ?string
    {
        return $this->bodyType;
    }

    /**
     * @param string|null $bodyType
     */
    public function setBodyType(?string $bodyType): void
    {
        $this->bodyType = $bodyType;
    }

    /**
     * @return string|null
     */
    public function getSegment(): ?string
    {
        return $this->segment;
    }

    /**
     * @param string|null $segment
     */
    public function setSegment(?string $segment): void
    {
        $this->segment = $segment;
    }
}

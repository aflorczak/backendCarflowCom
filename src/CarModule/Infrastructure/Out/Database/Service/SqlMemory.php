<?php

namespace App\CarModule\Infrastructure\Out\Database\Service;

use App\CarModule\Domain\Interfaces\Memory;
use App\CarModule\Domain\Model\CarDomain;
use App\CarModule\Infrastructure\Out\Database\Helper\CarConverter;
use App\CarModule\Infrastructure\Out\Database\Repository\CarRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SqlMemory implements Memory
{
    private CarRepository $carRepository;
    private CarConverter $carConverter;

    public function __construct(
        CarRepository $carRepository,
        CarConverter $carConverter
    )
    {
        $this->carRepository = $carRepository;
        $this->carConverter = $carConverter;
    }

    public function createNewCar(CarDomain $carDomain): void
    {
        $carEntity = $this->carConverter->toEntity($carDomain);
        $this->carRepository->save($carEntity, true);
    }

    public function getAllCars(): array
    {
        $carDomainArray = array();

        $carEntityArray = $this->carRepository->findAll();

        foreach ($carEntityArray as $carEntity)
        {
            array_push($carDomainArray, $this->carConverter->toDomain($carEntity));
        }

        return $carDomainArray;
    }

    /**
     * @throws NotFoundHttpException
     */
    public function getCarById(int $id): CarDomain
    {
        $carEntity = $this->carRepository->findOneBy(['id' => $id]);
        if ($carEntity)
        {
            return $this->carConverter->toDomain($carEntity);
        }
        else
        {
            throw new NotFoundHttpException("Object not found.");
        }
    }

    /**
     * @throws NotFoundHttpException
     */
    public function updateCarById(CarDomain $carDomain): CarDomain
    {

        $carEntity = $this->carConverter->toEntity($carDomain);

        $findedCar = $this->carRepository->findOneBy(['id' => $carEntity->getId()]);

        if ($findedCar)
        {
            $findedCar->setStatus($carEntity->getStatus());
            $findedCar->setBrand($carEntity->getBrand());
            $findedCar->setModel($carEntity->getModel());
            $findedCar->setVin($carEntity->getVin());

            $this->carRepository->save($findedCar, true);

            $responseCar = $this->carRepository->findOneBy(['id' => $carEntity->getId()]);

            return $this->carConverter->toDomain($responseCar);
        }
        else
        {
            throw new NotFoundHttpException("Object not found");
        }
    }

    /**
     * @throws NotFoundHttpException
     */
    public function deleteCarById(int $id): void
    {
        $findedCar = $this->carRepository->findOneBy(['id' => $id]);

        if ($findedCar)
        {
            $this->carRepository->remove($findedCar, true);
        }
        else
        {
            throw new NotFoundHttpException("Object not found");
        }
    }
}
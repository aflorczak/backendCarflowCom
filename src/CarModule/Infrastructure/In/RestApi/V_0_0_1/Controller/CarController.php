<?php

namespace App\CarModule\Infrastructure\In\RestApi\V_0_0_1\Controller;

use App\CarModule\Domain\Service\ServiceDomain;
use App\CarModule\Infrastructure\In\RestApi\V_0_0_1\Dto\CarDto;
use App\CarModule\Infrastructure\In\RestApi\V_0_0_1\Helper\CarConverter;
use App\CarModule\Infrastructure\In\RestApi\V_0_0_1\Helper\CarValidator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route("car-module/api/v-0_0_1/cars")]
class CarController extends AbstractController
{
    private CarConverter $carConverter;
    private ServiceDomain $serviceDomain;
    private CarValidator $carValidator;

    public function __construct(
        CarConverter $carConverter,
        ServiceDomain $serviceDomain,
        CarValidator $carValidator
    )
    {
        $this->carConverter = $carConverter;
        $this->serviceDomain = $serviceDomain;
        $this->carValidator = $carValidator;
    }

    #[Route("", name: "app_car-module_api_v-0-0-1_cars_create-new-car", methods: ['POST'])]
    public function createNewCar(
        Request $request
    ): JsonResponse
    {

        $data = json_decode($request->getContent(), true);

        $status = $data['status'];
        $brand = $data['brand'];
        $model = $data['model'];
        $vin = $data['vin'];

        $this->carValidator->statusValidator($status);
        $this->carValidator->vinValidator($vin);

        $carDto = new CarDto();
        $carDto->setId(0); // add custom NewCarDto class and remove this
        $carDto->setStatus($status);
        $carDto->setBrand($brand);
        $carDto->setModel($model);
        $carDto->setVin($vin);

        $car = $this->carConverter->toCarDomain($carDto);

        $this->serviceDomain->createNewCar($car);
        return $this->json(
            [
                "data" => "Tutaj musi być zwrotka z objektem, który został zapisany."
            ],
            Response::HTTP_CREATED
        );
    }

    #[Route("", name: "app_car-module_api_v-0-0-1_cars_get-all-cars", methods: ['GET'])]
    public function getAllCars(): JsonResponse
    {
        $carDtoArray = array();

        $carDomainArray = $this->serviceDomain->getAllCars();

        foreach ($carDomainArray as $carDomain)
        {
            array_push($carDtoArray, $this->carConverter->toCarDto($carDomain));
        }

        return $this->json(
            [
                "data" => $carDtoArray
            ],
            Response::HTTP_OK
        );
    }

    #[Route("/{id}", name: "app_car-module_api_v-0-0-1_cars_get-car-by-id", methods: ['GET'])]
    public function getCarById(int $id): JsonResponse
    {
        $carDomain = $this->serviceDomain->getCarById($id);
        $carDto = $this->carConverter->toCarDto($carDomain);
        return $this->json(
            [
                "data" => $carDto
            ],
            Response::HTTP_OK
        );
    }

    #[Route("/{paramId}", name: "app_car-module_api_v-0-0-1_cars_update-car-by-id", methods: ['PUT'])]
    public function updateCarById(Request $request, int $paramId): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $id = $data['id'];
        $status = $data['status'];
        $brand = $data['brand'];
        $model = $data['model'];
        $vin = $data['vin'];

        $this->carValidator->putIdValidator($paramId, $id);
        $this->carValidator->statusValidator($status);
        $this->carValidator->vinValidator($vin);

        $carDto = new CarDto();
        $carDto->setId($id);
        $carDto->setStatus($status);
        $carDto->setBrand($brand);
        $carDto->setModel($model);
        $carDto->setVin($vin);

        $car = $this->carConverter->toCarDomain($carDto);

        $carDomain = $this->serviceDomain->updateCarById($car);

        return $this->json(
            [
                "data" => $this->carConverter->toCarDto($carDomain)
            ],
            Response::HTTP_OK
        );
    }

    #[Route("/{id}", name: "app_car-module_api_v-0-0-1_cars_delete-car-by-id", methods: ['DELETE'])]
    public function deleteCarById(int $id): JsonResponse
    {
        $this->serviceDomain->deleteCarById($id);
        return $this->json(
            Response::HTTP_OK
        );
    }
}
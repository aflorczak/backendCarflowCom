<?php

namespace App\Module\AdminModule\Infrastructure\In\Ui\Controller;

use App\Module\AdminModule\Domain\Service\AdminModuleServiceDomain;
use App\Module\AdminModule\Infrastructure\In\Ui\Helper\CarDtoConverterInAdminModule;
use App\Module\CarModule\Infrastructure\Out\Database\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarsAdminController extends AbstractController
{
    private AdminModuleServiceDomain $service;
    private CarDtoConverterInAdminModule $carDtoConverterInAdminModule;

    public function __construct(
        AdminModuleServiceDomain $service,
        CarDtoConverterInAdminModule $carDtoConverterInAdminModule
    )
    {
        $this->service = $service;
        $this->carDtoConverterInAdminModule = $carDtoConverterInAdminModule;
    }

    #[Route('/admin/cars-module/cars', name: 'app_admin-module_ui_cars_all-cars', methods: ['GET'])]
    public function getAllCars(): Response
    {
        $cars = array();
        $numberOfCars = $this->service->getCarsNumberByStatus();
        $carsDomainArray = $this->service->getCarsByStatus();

        foreach ($carsDomainArray as $carDomain)
        {
            array_push($cars, $this->carDtoConverterInAdminModule->toDto($carDomain));
        }

        return $this->render('adminModule/views/cars/index.html.twig', [
            "cars" => $cars,
            "numberOfCars" => $numberOfCars
        ]);
    }

    #[Route('/admin/cars-module/cars/{id}', name: 'app_admin-module_ui_cars_car-details', methods: ['GET'])]
    public function getCarDetails(int $id): Response
    {
        $car = $this->carDtoConverterInAdminModule->toDto($this->service->getCarById($id));
        return $this->render('adminModule/views/cars/carDetails.html.twig', [
            "car" => $car
        ]);
    }

    #[Route('/admin/cars-module/cars/{id}/delete', name: 'app_admin-module_ui_cars_delete-car', methods: ['GET'])]
    public function deleteCarById(int $id): Response
    {
        $this->service->deleteCarById($id);
        return $this->redirect('/admin/cars-module/cars/');
    }

    #[Route('/admin/cars-module/active-cars', name: 'app_admin-module_ui_cars_active-cars', methods: ['GET'])]
    public function getActiveCars(): Response
    {
        $status = "ACTIVE";

        $cars = array();
        $numberOfCars = $this->service->getCarsNumberByStatus($status);
        $carsDomainArray = $this->service->getCarsByStatus($status);

        foreach ($carsDomainArray as $carDomain)
        {
            array_push($cars, $this->carDtoConverterInAdminModule->toDto($carDomain));
        }

        return $this->render('adminModule/views/cars/activeCars.html.twig', [
            "cars" => $cars,
            "numberOfCars" => $numberOfCars
        ]);
    }

    #[Route('/admin/cars-module/blocked-cars', name: 'app_admin-module_ui_cars_blocked-cars', methods: ['GET'])]
    public function getBlockedCars(): Response
    {
        $status = "BLOCKED";

        $cars = array();
        $numberOfCars = $this->service->getCarsNumberByStatus($status);
        $carsDomainArray = $this->service->getCarsByStatus($status);

        foreach ($carsDomainArray as $carDomain)
        {
            array_push($cars, $this->carDtoConverterInAdminModule->toDto($carDomain));
        }

        return $this->render('adminModule/views/cars/blockedCars.html.twig', [
            "cars" => $cars,
            "numberOfCars" => $numberOfCars
        ]);
    }

    #[Route('/admin/cars-module/archived-cars', name: 'app_admin-module_ui_cars_archived-cars', methods: ['GET'])]
    public function getArchivedCars(): Response
    {
        $status = "ARCHIVED";

        $cars = array();
        $numberOfCars = $this->service->getCarsNumberByStatus($status);
        $carsDomainArray = $this->service->getCarsByStatus($status);

        foreach ($carsDomainArray as $carDomain)
        {
            array_push($cars, $this->carDtoConverterInAdminModule->toDto($carDomain));
        }

        return $this->render('adminModule/views/cars/archivedCars.html.twig', [
            "cars" => $cars,
            "numberOfCars" => $numberOfCars
        ]);
    }
}
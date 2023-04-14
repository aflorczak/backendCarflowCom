<?php

namespace App\Module\AdminModule\Infrastructure\In\Ui\Controller;

use App\Module\AdminModule\Domain\Service\AdminModuleServiceDomain;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    private AdminModuleServiceDomain $service;

    public function __construct(AdminModuleServiceDomain $service)
    {
        $this->service = $service;
    }

    #[Route('/admin/dashboard', name: 'app_admin-module_ui_dashboard', methods: ['GET'])]
    public function getDashboard(): Response
    {
        return $this->render('adminModule/views/dashboard/index.html.twig', [
            "allCars" => $this->service->getCarsNumberByStatus(),
            "activeCars" => $this->service->getCarsNumberByStatus("ACTIVE"),
            "blockedCars" => $this->service->getCarsNumberByStatus("BLOCKED"),
            "archivedCars" => $this->service->getCarsNumberByStatus("ARCHIVED"),
        ]);
    }
}
<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienLocController extends AbstractController
{
    #[Route('/bien/loc', name: 'app_bien_loc')]
    public function index(): Response
    {
        return $this->render('bien_loc/index.html.twig', [
            'controller_name' => 'BienLocController',
        ]);
    }
}

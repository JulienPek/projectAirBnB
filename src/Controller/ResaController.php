<?php

namespace App\Controller;

use App\Repository\ResaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResaController extends AbstractController
{
    #[Route('/resa', name: 'app_resa')]
    public function index(ResaRepository $resaRepository): Response
    {
        $resa = $resaRepository->findAll();
        return $this->render('resa/index.html.twig', [
            'resa' => $resa,
        ]);
    }
}

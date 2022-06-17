<?php

namespace App\Controller;

use App\Repository\BienLocRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienLocController extends AbstractController
{
    #[Route('/bien', name: 'app_bien_loc')]
    public function index(BienLocRepository $bienLocRepository): Response
    {
        $bienList = $bienLocRepository->findAll();
        // dump($bienList);
        return $this->render('bien_loc/index.html.twig', [
            'bienList' => $bienList,
        ]);
    }
}

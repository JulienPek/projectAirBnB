<?php

namespace App\Controller;

use App\Entity\Resa;
use App\Form\ResaType;
use App\Repository\ResaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResaController extends AbstractController
{
    #[Route('/resa', name: 'app_resa')]
    public function index(Request $request, ResaRepository $resaRepository): Response
    {
        $reservation = new Resa();
        $form = $this->createForm(ResaType::class, $reservation);
        $form->handleRequest($request);
        dump($form->getData());
        return $this->render('resa/index.html.twig', [
            'resa' => $form->createView(),
        ]);
    }   

    /* #[Route('/resa', name: 'resa_edit')]
    public function edit(Resa $resa): Response
    {
        $form = $this->createForm(ResaType::class, $resa);
        dump($form);
        return $this->render('resa/index.html.twig', [
            'form' => $form->createView(),
        ]);
    } */
}

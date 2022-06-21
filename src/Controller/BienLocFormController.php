<?php

namespace App\Controller;
use App\Entity\BienLoc;
use App\Form\BienLocType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BienLocFormController extends AbstractController
{
    #[Route('/bien/loc/form', name: 'app_bien_loc_form')]
    public function index(Request $request): Response
    {
        $bienLoc = new BienLoc();
        $form = $this->createForm(BienLocType::class, $bienLoc);
        $form->handleRequest($request);

        
        return $this->render('bien_loc_form/index.html.twig', [
            'BienLocForm' => $form->createView(),
        ]);
    }
}

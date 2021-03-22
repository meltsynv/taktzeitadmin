<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GeheimController extends AbstractController
{
    /**
     * @Route("/geheim", name="geheim")
     */
    public function index(): Response
    {
        return $this->render('geheim/index.html.twig', [
            'controller_name' => 'GeheimController',
        ]);
    }
}

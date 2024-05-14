<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NostalgieController extends AbstractController
{
    #[Route('/nostalgie', name: 'app_nostalgie')]
    public function index(): Response
    {
        return $this->render('nostalgie/index.html.twig', [
            'controller_name' => 'NostalgieController',
        ]);
    }
}

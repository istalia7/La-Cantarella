<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class RedirectionMailController extends AbstractController
{
    #[Route('/redirection/mail', name: 'app_redirection_mail')]
    public function index(): Response
    {
        return $this->render('redirection_mail/index.html.twig', [
            'controller_name' => 'RedirectionMailController',
        ]);
    }
}

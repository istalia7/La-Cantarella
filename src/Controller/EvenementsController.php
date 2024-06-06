<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EvenementsController extends AbstractController
{
    #[Route('/evenements', name: 'app_evenements')]
    public function index(ArticleRepository $repository): Response
    {
        $articles = $repository->findAll();

        return $this->render('evenements/index.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/evenements/affiche', name: 'app_affiche')]
    public function affiche(ArticleRepository $repository): Response
    {
        $articles = $repository->findByCategory(1);

        return $this->render('evenements/affiche.html.twig', [
            'articles' => $articles,
        ]);
    }

    #[Route('/evenements/rubrique', name: 'app_rubrique')]
    public function rubrique(ArticleRepository $repository): Response
    {
        $articles = $repository->findByCategory(2);

        return $this->render('evenements/rubrique.html.twig', [
            'articles' => $articles,
        ]);
    }
}

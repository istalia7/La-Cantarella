<?php

namespace App\Controller;

use App\Repository\FileRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FileSharingController extends AbstractController
{
    #[Route('/file/sharing', name: 'app_file_sharing')]
    public function index(FileRepository $repository): Response
    {
        $files = $repository->findAll();

        return $this->render('file_sharing/index.html.twig', [
            'files' => $files,
        ]);
    }
}

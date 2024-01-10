<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KillianController extends AbstractController
{
    #[Route('/killian', name: 'app_killian')]
    public function index(): Response
    {
        return $this->render('killian/index.html.twig', [
            'controller_name' => 'KillianController',
        ]);
    }
}
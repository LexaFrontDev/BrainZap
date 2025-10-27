<?php

namespace App\Infrastructure\Controller\react;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AppController extends AbstractController
{
    #[Route('/{reactRouting}', name: 'app', requirements: ['reactRouting' => '^(?!api).*$'])]
    public function index(): Response
    {
        return $this->render('react/base_react.html.twig');
    }
}
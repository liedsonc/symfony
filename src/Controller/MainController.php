<?php

namespace App\Controller;

use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function homepage(StarshipRepository $starshipRepository): Response
    {   
        $ships = $starshipRepository->findAll();
        $starshipCount = count($ships);
        $myships = $starshipRepository->findAll();

        return $this->render('main/homepage.html.twig', [
            'starshipCount' => $starshipCount,
        ]);
    }
}

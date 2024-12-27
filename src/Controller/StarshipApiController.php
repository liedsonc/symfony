<?php

namespace App\Controller;



use App\Repository\StarshipRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


class StarshipApiController extends AbstractController
{
    #[Route('/api/starships', methods: ['GET'])]
    public function getCollection(StarshipRepository $starshipRepository): Response
    {

        $starships = $starshipRepository->findAll();


        return $this->json($starships);
    }

    #[Route('/api/starships/{id<\d+>}', methods: ['GET'])]
    public function get($id):Response
    {
        dd($id);
    }
}

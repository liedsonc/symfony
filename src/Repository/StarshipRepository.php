<?php

namespace App\Repository;

use Psr\Log\LoggerInterface;

class StarshipRepository
{
    public function __construct(private LoggerInterface $logger)
    {
    }
    public function findAll(): array
    {
        $this->logger->info('Fetching starships from the database');
        return [
            [
                'id' => 1,
                'name' => 'USS Enterprise',
                'class' => 'Constitution',
                'captain' => 'James T. Kirk',
                'status' => 'Active',
            ],
            [
                'id' => 2,
                'name' => 'USS Voyager',
                'class' => 'Intrepid',
                'captain' => 'Kathryn Janeway',
                'status' => 'Active',
            ],
            [
                'id' => 3,
                'name' => 'USS Defiant',
                'class' => 'Defiant',
                'captain' => 'Benjamin Sisko',
                'status' => 'Active',
            ],
        ];
    }
}
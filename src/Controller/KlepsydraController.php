<?php

namespace App\Controller;

use App\Entity\Klepsydra;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class KlepsydraController extends AbstractController
{

        #[Route('/klepsydra', name: 'app_klepsydra')]
        public function createProduct(ManagerRegistry $doctrine): Response
        {
            $entityManager = $doctrine->getManager();

            $klepsydra = new Klepsydra();
            $klepsydra->setName('Jan');

            // tell Doctrine you want to (eventually) save the Product (no queries yet)
            $entityManager->persist($klepsydra);

            // actually executes the queries (i.e. the INSERT query)
            $entityManager->flush();

            return new Response('Saved new klepsydra with id '.$klepsydra->getId());
        }
}

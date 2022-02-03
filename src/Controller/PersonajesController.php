<?php

namespace App\Controller;

use App\Entity\Personajes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PersonajesController extends AbstractController
{
    /**
     * @Route("/personajes", name="Personajes")
     */
    public function inicio(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(Personajes::class);
        $personajes = $repositorio->findAll();

        return $this->render('personajes/index.html.twig', [
            'controller_name' => 'PageController',
            'personajes' => $personajes,
        ]);
    }

}

<?php

namespace App\Controller;

use App\Entity\Regiones;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegionesController extends AbstractController
{
    /**
     * @Route("/region/{texto}", name="regiones")
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $repositorio = $doctrine->getRepository(Regiones::class);
        $regiones = $repositorio->findAll();

        return $this->render('regiones/index.html.twig', [
            'controller_name' => 'RegionesController',
            'regiones' => $regiones,

        ]);
    }
}

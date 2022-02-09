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
     * @Route("/region/{texto}/{id}", name="regiones")
     */
    public function index(ManagerRegistry $doctrine,$id): Response
    {
        $repositorio = $doctrine->getRepository(Regiones::class);
        $region = $repositorio->find($id);

        return $this->render('regiones/index.html.twig', [
            'controller_name' => 'RegionesController',
            'region' => $region,

        ]);
    }
}

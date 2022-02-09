<?php

namespace App\Controller;


use App\Entity\Regiones;
use App\Entity\Personajes;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="Inicio")
     */
    public function inicio(ManagerRegistry $doctrine): Response
    {
        

        $repositorio = $doctrine->getRepository(Regiones::class);
        $regiones = $repositorio->findAll();

        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
            'regiones' => $regiones,
        ]);
    }
    
    /**
     * @Route("/buscar/{texto}", name="Busqueda")
     */
    public function buscar(ManagerRegistry $doctrine, $texto): Response{
       
        $repositorio = $doctrine->getRepository(Personajes::class);
        $personajes = $repositorio->findByName($texto);

        return $this->render('lista_personajes.html.twig', ['personajes' => $personajes]);
    }

}

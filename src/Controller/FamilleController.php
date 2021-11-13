<?php

namespace App\Controller;

use App\Entity\Famille;
use App\Repository\FamilleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FamilleController extends AbstractController
{
    /**
     * @Route("/familles", name="familles")
     */
    public function index(FamilleRepository $repo): Response
    {
        $familles=$repo->findAll();
        return $this->render('famille/familles.html.twig',[
            'familles'=>$familles,
        ]
        
    );
    }
    /**
     * @Route("/familles/{id}", name="affiche_famille")
     */
    public function affiche_famille(Famille $famille): Response
    {

        return $this->render('famille/afficher_famille.html.twig',[
            'famille'=>$famille,
        ]
        
    );
    }
}

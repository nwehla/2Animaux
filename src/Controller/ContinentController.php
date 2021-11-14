<?php

namespace App\Controller;

use App\Repository\ContinentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContinentController extends AbstractController
{
    /**
     * @Route("/continent", name="continents")
     */
    public function index(ContinentRepository $repo): Response
    {
        $continents = $repo->findAll();
        return $this->render('continent/continent.html.twig',[
            'continents'=>$continents,
        ]
        );
    }
}

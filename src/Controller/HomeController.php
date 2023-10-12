<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{/*#[Route('/home', name: 'app_home')]
  architecture mvc 
  1.envoyer une requet http en saisisant les données a partir de url d'un navigateur
  2.recuperer la request http par le 'controleur'
  3.si besoin appl le 'model' ou envoi de la requete vers le model afin d'interagir avec la bdd
  4.model envoi la reponse au 'controler'
  5.controller recupere la reponse et envoie vers la 'views'*/
    
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/cat', name: 'app_cat')]
    public function alin(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}

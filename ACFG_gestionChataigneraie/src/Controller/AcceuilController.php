<?php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class MonController extends AbstractController
{
    
    /**
     * @Route("/acceuil", name="Page d'acceuil")
     */
    public function Acceuil()
    {
        return new Response("Bienvenue Login");
    }
}

?>()
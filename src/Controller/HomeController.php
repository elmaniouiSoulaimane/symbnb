<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends AbstractController {
    /**
     * @Route("/bonjour", name="hello_base")
     * @Route("/bonjour/{prenom}", name="hello_prenom")
     * @Route("/bonjour/{prenom}/age/{age}", name="hello")
     * Montre la page qui dit bonjour
     *
     * @return void
     **/
    public function hello($prenom = "anonyme", $age = 0){
        return $this->render(
            'hello.html.twig',
            [
                'prenom' => $prenom,
                'age' => $age
            ]
        );
    }



    /**
     * @Route("/", name="homepage")
    */
    public function home(){
        $prenoms = ["Lior" => 31, "Joseph"=> 12, "Anne"=> 55];
        return $this->render(
            'home.html.twig'
        );
    }
}
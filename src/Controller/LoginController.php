<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

 

Class LoginController extends AbstractController {

    /**
     *  @Route("/", name="login")
     */
    public function index() : Response {

        $prueba = $this->VolverDatos();

        return $this->render('login/login.html.twig',[
            'prueba' => $prueba
        ]);
    }

    public function VolverDatos(){
        $array1 = ["Hola", "mama"];

        return $array1;
    }
    
}

?>
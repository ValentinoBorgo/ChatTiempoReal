<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Usuario;

 

Class LoginController extends AbstractController {

    /**
     *  @Route("/", name="login")
     */
    public function index(ManagerRegistry $doctrine) : Response {

        try{

            $repository = $doctrine->getRepository(Usuario::class);
            $usuarios = $repository->findAll();

        }catch(error $e){
            echo "ERROR " . $e; 
        }

        return $this->render('login/login.html.twig',[
            'prueba' => $usuarios
        ]);
    }
    
}

?>
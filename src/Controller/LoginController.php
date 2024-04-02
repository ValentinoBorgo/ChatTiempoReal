<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Usuario;

 

Class LoginController extends AbstractController {

    /**
     *  @Route("/", name="index")
     */
    public function index(ManagerRegistry $doctrine, Request $request) : Response {

        try{

            $repository = $doctrine->getRepository(Usuario::class);
            $usuarios = $repository->findAll();

        }catch(error $e){
            echo "ERROR " . $e; 
        }

        // if ($request->isMethod('POST')) {
        //     return $this->redirectToRoute('chat_route');
        // }

        return $this->render('login/principal.html.twig',[
            'prueba' => $usuarios
        ]);
    }
    
}

?>
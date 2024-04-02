<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;

 

Class ChatController extends AbstractController {

    /**
     *  @Route("/chat", name="chat_route")
     */
    public function moveToChat() : Response{
        return $this->render('login/log.html.twig');
    }
    
}

?>
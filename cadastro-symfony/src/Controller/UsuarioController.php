<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/",name="web_user_")
 */
class UsuarioController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"}, name="index")
     */

     public function index(): Response{

        return $this->render("user/error.html.twig",[
          "User" => "Guilherme"
        ]);
     }

     /**
      * @Route("/salvar", methods={"POST"}, name="salvar")
      */

      public function salvar(): Response{
        
        return new Response("implementar a gravação no banco de dados");
      }
}
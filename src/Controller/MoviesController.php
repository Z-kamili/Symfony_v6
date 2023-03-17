<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
  
    /**
     * @Route("/movies/{name}", name="movies",defaults={'name'=> null},methods={'GET','HEAD'})
     */
    public function index($name): JsonResponse
    {

        return $this->json([
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);

    }


    
    /**
     * oldMethod
     * 
     * @Route("/old/test",name="old")
     */
    public function olMethod():Response 
    {
        return $this->json([
             'message' => 'Old Method.',
             'path'=> 'src/Controller/MoviesController.php',
        ]);
    }

}

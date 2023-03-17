<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    /**
     * @Route("/movies/{name}", name="app_movies")
     */
    // #[Route("/movies/inception", name:"movies")]
    public function index(): JsonResponse
    {

        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MoviesController.php',
        ]);

    }


    
    /**
     * oldMethod
     * 
     * @Route("/old/test",name="old")
     */
    public function olMethod():Response {
        return $this->json([
             'message' => 'Old Method.',
             'path'=> 'src/Controller/MoviesController.php',
        ]);
    }
}

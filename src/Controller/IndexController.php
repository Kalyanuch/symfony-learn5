<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    public function home()
    {
        return new Response('<h1>Hello world!!</h1>');
    }

    public function testJson()
    {
        return $this->json([
            'name' => 'Kolya',
            'soname' => 'Shamrylo'
        ]);
    }

    /**
      * @Route("/testAnnotation")
      */
    public function testAnnotation()
    {
        return new Response('<h1>This route defines by annotations!!</h1>');
    }
}
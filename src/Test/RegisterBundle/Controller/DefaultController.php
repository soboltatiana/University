<?php

namespace Test\RegisterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {   $phrase=$name.' How are you today?';
        return $this->render('TestRegisterBundle:Default:index.html.twig', array('name' => $phrase));
    }
    
    public function helloAction(){
        return new Response('Hello Word!');
    }
}

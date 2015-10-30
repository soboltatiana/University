<?php

namespace Test\RegisterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        
        return $this->render('TestRegisterBundle:Default:index.html.twig');
    }

    public function helloUserAction() {
        $securityContext = $this->container->get('security.context');
        if (!$securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
            $this->redirect($this->generateUrl('test_homepage'));
        }
        $user=$securityContext->getToken()->getUser()->getUsername();
        $message="Hello ". $user." Welcome to Your Schedule Page";
        return new Response($message);
    }

}

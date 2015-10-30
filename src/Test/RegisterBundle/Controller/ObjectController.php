<?php

namespace Test\RegisterBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Test\RegisterBundle\Entity\Object;

/**
 * Description of ObjectController
 *
 * @author tatiana
 */
class ObjectController extends Controller {

    public function addAction(Request $request) {
        $object = new Object();
        $form = $this->get('form.factory')->createBuilder('form', $object)
                ->add('shortName', 'text')
                ->add('longName', 'text')
                ->add('description', 'textarea', array('required' => false))
                ->add('save', 'submit')
                ->getForm();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($object);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Objet enregistre');

            return $this->redirect($this->generateUrl('test_hello_user'));
        }
        return $this->render('TestRegisterBundle:Object:add.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function getObjectsWithAAction() {
        $repository = $this->getDoctrine()->getEntityManager()->getRepository('TestRegisterBundle:Object');
        $object = $repository->getObjectsWithA();

        return new Response($object);
    }
    
    //ParamConverter
    public function getByIdAction(Object $object) {

        exit(\Doctrine\Common\Util\Debug::dump($object));
    }

}

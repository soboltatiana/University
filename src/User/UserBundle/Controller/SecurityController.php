<?php

namespace User\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\Security\Core\SecurityContext;


/**
 * Description of SecurityController
 *
 * @author tatiana
 */
class SecurityController extends Controller {

    public function loginAction(Request $request) {
        $session = $request->getSession();

        // Si le visiteur est déjà identifié, on le redirige vers l'accueil

        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {

            return $this->redirect($this->generateUrl('test_hello_word'));
        }
        // get the login error if there is one
        if ($request->attributes->has(SecurityContextInterface::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                    SecurityContextInterface::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContextInterface::AUTHENTICATION_ERROR);
            $session->remove(SecurityContextInterface::AUTHENTICATION_ERROR);
        }

        return $this->render(
                        'UserUserBundle:Security:login.html.twig', array(
                    // last username entered by the user
                    'last_username' => $session->get(SecurityContextInterface::LAST_USERNAME),
                    'error' => $error,
        ));
    }

}

<?php
namespace fl\flopupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;

use fl\flopupBundle\Entity\User;
use fl\flopupBundle\Form\UserType;

class SecurityController extends Controller
{
    public function registerAction()
    {
        $user = new User();
        $form = $this->createForm(new UserType(), $user);

        return $this->render('flflopupBundle:Security:register.html.twig', array('form' => $form->createView())); 
    }

    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'flflopupBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
                'active' => 4
            )
        );
    }

    public function dumpStringAction()
    {
      return $this->render('flflopupBundle:Security:dumpString.html.twig', array());
    }
}

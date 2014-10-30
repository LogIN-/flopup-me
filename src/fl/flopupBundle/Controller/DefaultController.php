<?php

namespace fl\flopupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {

        $session = $request->getSession();

        $active = 1;
        return $this->render('flflopupBundle:Default:pages/homepage.html.twig', array('active' => $active));

    }
    public function aboutAction()
    {
        $active = 2;
        return $this->render('flflopupBundle:Default:pages/about.html.twig', array('active' => $active));
    }
    public function contactAction()
    {
        $active = 3;
        return $this->render('flflopupBundle:Default:pages/contact.html.twig', array('active' => $active));
    }    

}

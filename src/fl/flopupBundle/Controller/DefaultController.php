<?php

namespace fl\flopupBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "Index";
        return $this->render('flflopupBundle:Default:pages/homepage.html.twig', array('name' => $name));

    }
}

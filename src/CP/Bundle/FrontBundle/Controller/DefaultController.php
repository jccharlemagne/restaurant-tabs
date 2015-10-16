<?php

namespace CP\Bundle\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CPFrontBundle:Default:index.html.twig', array('name' => $name));
    }
}

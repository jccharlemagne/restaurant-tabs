<?php

namespace CP\Bundle\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CPBackBundle:Default:index.html.twig', array('name' => $name));
    }
}

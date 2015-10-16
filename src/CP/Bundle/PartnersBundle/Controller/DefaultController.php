<?php

namespace CP\Bundle\PartnersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CPPartnersBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace ShineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ShineBundle:Default:index.html.twig', array('name' => $name));
    }
}

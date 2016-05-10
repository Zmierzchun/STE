<?php

namespace STEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('STEBundle:Default:index.html.twig');
    }
}

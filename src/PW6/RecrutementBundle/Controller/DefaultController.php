<?php

namespace PW6\RecrutementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PW6RecrutementBundle:Default:index.html.twig');
    }
}

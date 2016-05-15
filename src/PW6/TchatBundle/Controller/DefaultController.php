<?php

namespace PW6\TchatBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        header('Location: /Resources/public/Tchat/index.html');
        exit();
    }
}

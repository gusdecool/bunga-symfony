<?php

namespace Bunga\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BungaFrontBundle:Default:index.html.twig');
    }
}

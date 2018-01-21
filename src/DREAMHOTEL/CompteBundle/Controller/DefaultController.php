<?php

namespace DREAMHOTEL\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELCompteBundle:Default:index.html.twig');
    }
    public function creercompteAction()
    {
        return $this->render('DREAMHOTELCompteBundle:Default:signup.html.twig');
    }
}

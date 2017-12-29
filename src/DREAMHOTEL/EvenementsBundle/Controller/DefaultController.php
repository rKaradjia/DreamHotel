<?php

namespace DREAMHOTEL\EvenementsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELEvenementsBundle:Default:index.html.twig');
    }
}

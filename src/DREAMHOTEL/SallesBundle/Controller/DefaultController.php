<?php

namespace DREAMHOTEL\SallesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELSallesBundle:Default:index.html.twig');
    }
}

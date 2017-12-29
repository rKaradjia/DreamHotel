<?php

namespace DREAMHOTEL\ChambresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Default:index.html.twig');
    }
}

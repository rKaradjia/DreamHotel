<?php

namespace DREAMHOTEL\ReserverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELReserverBundle:Default:index.html.twig');
    }
}

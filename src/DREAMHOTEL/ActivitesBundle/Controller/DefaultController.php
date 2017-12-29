<?php

namespace DREAMHOTEL\ActivitesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELActivitesBundle:Default:index.html.twig');
    }
}

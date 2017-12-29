<?php

namespace DREAMHOTEL\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELAccueilBundle:Default:index.html.twig');
    }
}

<?php

namespace DREAMHOTEL\ChambresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Default:index.html.twig');
    }
    
    public function twinstandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Twin:twinStandart.html.twig');
    }
    public function simplestandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Simples:simpleStandart.html.twig');
    }  
    public function doublestandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Doubles:doubleStandart.html.twig');
    } 
    public function suitedeluxeAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Suites:suiteDseluxe.html.twig');
    } 
}

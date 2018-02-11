<?php

namespace DREAMHOTEL\ChambresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Default:index.html.twig');
    }
    //les cchambres twin
    public function twinstandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Twin:twinStandart.html.twig');
    }
    public function twinconfortAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Twin:twinConfort.html.twig');
    }
    public function twindeluxeAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Twin:twinDeluxe.html.twig');
    }
    
    
    
    //les chambres simple
    public function simplestandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Simples:simpleStandart.html.twig');
    }  
    public function simpleconfortAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Simples:simpleConfort.html.twig');
    }  
    public function simpleclassiqueAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Simples:simpleClassique.html.twig');
    }  
    
    
    
    //les chambres standart
    public function doublestandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Doubles:doubleStandart.html.twig');
    } 
    public function doubleconfortAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Doubles:doubleConfort.html.twig');
    } 
    public function doubledeluxeAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Doubles:doubleDeluxe.html.twig');
    } 
    
    
    
    //les suite
    public function suitedeluxeAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Suites:suiteDeluxe.html.twig');
    } 
    public function suiteconfortAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Suites:suiteConfort.html.twig');
    } 
    public function suitestandartAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Suites:suiteStandart.html.twig');
    } 
    public function suitepresidentielleAction()
    {
        return $this->render('DREAMHOTELChambresBundle:Suites:suitePresidentielle.html.twig');
    } 
}

<?php

namespace DREAMHOTEL\AccueilBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

        $this->assertContains('Hello World', $client->getResponse()->getContent());
        
          /*  $form= $this->createFormBuilder()->add('login','text')  creation du formulaire
                     ->add('motDePasse', 'password')
                     ->add('profil','choice',
                            array('choices'=>array('artisan'=>'Artisan','entrepreneur'=>'Entrepreneur')))
                     ->add('valider','submit')
                     ->add('annuler','reset')
                     ->getForm();
                return $this->render('DREAMHOTELAccueilBundle:Default:index.html.twig',array('form'=>$form->createView()));*/
    }
}

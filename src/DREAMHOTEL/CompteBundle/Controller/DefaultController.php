<?php

namespace DREAMHOTEL\CompteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DREAMHOTEL\CompteBundle\Entity\Compte;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $compte = new Compte();
        $compte->setId('id');
        $compte->setMdp('mdp');
        
        $form = $this->createFormBuilder($compte)
            ->add('id', TextType::class)
            ->add('mdp', PasswordType::class)
            ->add('save', SubmitType::class, array('label' => 'Se Connecter'))    
            ->getForm();
       /* return $this->render('DREAMHOTELCompteBundle:Default:index.html.twig', array(

            'form' => $form->createView(),));*/
        
        return $this->render('DREAMHOTELCompteBundle:Default:index.html.twig', array(

            'form' => $form->createView(),

        ));
    }
    public function creercompteAction()
    {
        $compte = new Compte();
        $compte->setId('id');
        $compte->setMdp('mdp');
        $compte->setNom('nom');
        $compte->setPrenom('prenom');
        $compte->setRue('rue');
        $compte->setVille('ville');
        
        $form = $this->createFormBuilder($compte)
            ->add('id', TextType::class)
            ->add('mdp', PasswordType::class)
             
            ->add('prenom', TextType::class)   
                
            ->add('nom', TextType::class)    
                
            ->add('rue', TextType::class)   
                
            ->add('ville', TextType::class)    
                
            ->add('save', SubmitType::class, array('label' => 'Creer'))    
            ->getForm();
        
        
        return $this->render('DREAMHOTELCompteBundle:Default:signup.html.twig', array(

            'form' => $form->createView(),

        ));
    }
}

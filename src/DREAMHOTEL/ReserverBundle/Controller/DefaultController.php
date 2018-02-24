<?php

namespace DREAMHOTEL\ReserverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DREAMHOTEL\ReserverBundle\Entity\Formulaire;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $request = $this->container->get('request');
        $form->handleRequest($request);
        if ($form->isValid())
            { 
         // traitement
            }
        $task=new Formulaire();
        $task->setSaisieid('id');
        $task->setSaisiemdp('mot de passe');
        $task->setTypeChambre('typeChambre');
        $task->setFormuleChambre('formuleChambre');
        $task->setTypeChambre('typeChambre');
        $task->setSalle('salle');
        $task->setActivite('Activite');
        
         $form = $this->createFormBuilder($task)
            ->add('saisieid', TextType::class)
            ->add('saisiemdp', PasswordType::class)
            ->add('typechambre', ChoiceType::class, array(
        'label' => false,
        'attr' => array(
            'class' => 'stylee'
        ),
        'choices'  => array(
            '-- Type de Chambres --' => null,
            'twin' => 'twin',
            'simple' => 'simple',
            'double' => 'double',
            'suite' => 'suite',
        )
    ))
                 
                 
            ->add('formulechambre', ChoiceType::class, array(
        'label' => false,
        'attr' => array(
            'class' => 'stylee'
        ),
        'choices'  => array(
            '-- Type de formule --' => null,
            'standart' => 'standart',
            'classique' => 'classique',
            'confort' => 'confort',
            'deluxe' => 'deluxe',
            'Presidentielle'=>'Presidentielle',
        )
    ))    
            ->add('salle', ChoiceType::class, array(
        'label' => false,
        'attr' => array(
            'class' => 'stylee'
        ),
        'choices'  => array(
            '-- Type de Salle --' => null,
            'Conférence' => 'Conférence',
            'Meeting' => 'Meeting',
            'Reunion' => 'Reunion',
            'Séminaire' => 'Séminaire',
            'Reception' => 'Reception',
            'Fete' => 'Fete',
            'Mariage' => 'Mariage',
        )
    ))
            ->add('activite', ChoiceType::class, array(
        'label' => false,
        'attr' => array(
            'class' => 'stylee'
        ),
        'choices'  => array(
            '-- Type d Activite --' => null,
            'Football' => 'Football',
            'Basket' => 'Basket',
            
        )
    ))      
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();
        
        return $this->render('DREAMHOTELReserverBundle:Default:index.html.twig', array(

            'form' => $form->createView(),

        ));


        
        
       // return $this->render('DREAMHOTELReserverBundle:Default:index.html.twig');
    }
}

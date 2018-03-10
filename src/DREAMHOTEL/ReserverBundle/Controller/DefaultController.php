<?php

namespace DREAMHOTEL\ReserverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use DREAMHOTEL\ReserverBundle\Entity\Formulaire;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FormType;


use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        $task=new Formulaire();
        
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $task);
        
        $task->setSaisieid('id');
        $task->setSaisiemdp('mot de passe');
        $task->setTypeChambre('typeChambre');
        $task->setFormuleChambre('formuleChambre');
        $task->setTypeChambre('typeChambre');
        $task->setSalle('salle');
        $task->setActivite('Activite');
        
        $formBuilder
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
            ->add('save', SubmitType::class, array('label' => 'Create Task'));
        
        $form = $formBuilder->getForm();
        
        
       
        
        //$form->handleRequest($request);
	

     /* if ($form->isSubmitted()) {

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)

         if ($form->isValid()) {

        // On enregistre notre objet $livre dans la base de données : 
        
           $em = $this->getDoctrine()->getManager();         
           $em->persist($task);
           $request->getSession()->getFlashBag()->add('notice', 'Categorie bien enregistré.');
           $em->flush();        
           //$request->getSession()->getFlashBag()->add('notice', 'Categorie bien enregistré.');

      // À partir du formBuilder, on génère le formulaire
    // On redirige vers la page de visualisation du livre nouvellement créé

        return $this->redirectToRoute('affichage_page', array('id' => $categorie->getId()));
         
         
         }
      }*/
        
        
        return $this->render('DREAMHOTELReserverBundle:Default:index.html.twig', array(

            'form' => $form->createView(),

        ));


        
        
       // return $this->render('DREAMHOTELReserverBundle:Default:index.html.twig');
    }
}

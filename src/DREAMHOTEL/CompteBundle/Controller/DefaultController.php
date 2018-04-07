<?php

namespace DREAMHOTEL\CompteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DREAMHOTEL\CompteBundle\Entity\Compte;
use DREAMHOTEL\CompteBundle\Entity\Client;
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
      //creation du formulaire 
       
        $client = new Client();
        
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $client);
        
        $formBuilder
                
            ->add('identifiantCo', TextType::class)    
               
            ->add('mdpCo', PasswordType::class)    
                
            ->add('save', SubmitType::class);
       
        $form = $formBuilder->getForm();
       
        $form->handleRequest($request);
        $vartestissub = 0;
	var_dump("avant le issubmitted");
        //on verifit qu'on est en post
      if ($form->isSubmitted()) {
          var_dump($vartestissub);
          $vartestisval = 1;
      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          
      //var_dump($form->getErrors());
          
          
            var_dump("avant le isvalid");
        // if ($form->isValid()) {                     PROBLEME A CORRIGER ULTERIEUREMENT 
               var_dump("dans e isvalid");
               var_dump($vartestisval);
               $id = $form->get('identifiantCo')->getData();
               $mdp = $form->get('mdpCo')->getData();
               var_dump($id);
               var_dump($mdp);
            
               $em = $this->getDoctrine()->getManager();      
                  
               $query = $em->createQuery(
                   'SELECT count(c.id)
                    FROM DREAMHOTELCompteBundle:client c
                    WHERE c.identifiantCo = :identifiant
                    AND c.mdpCo = :mdp'
                  );
                    $query->setParameter('identifiant', $id);
                    $query->setParameter('mdp' , $mdp);
                    
                    $nbLigne = $query->getScalarResult();
                    $nbLigne = 0;
                    var_dump($nbLigne);
                if ( count($nbLigne) == 1){
                  dump($nbLigne);
                  dump("RESERVER");
                  return $this->redirectToRoute('dreamhotel_reserver');
                  
                }
           
          //  }
        }
      
       return $this->render('DREAMHOTELCompteBundle:Default:index.html.twig', array('form' => $form->createView()));
    
    }
    public function creercompteAction(Request $request)
    {
        $client = new Client();
        
        $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $client);
        
       $formBuilder
            ->add('nom', TextType::class)
             
            ->add('prenom', TextType::class)   
                
            ->add('villeResidence', TextType::class)    
                
            ->add('rueResidence', TextType::class)   
                
            ->add('identifiantCo', TextType::class)    
               
            ->add('mdpCo', PasswordType::class)    
                
            ->add('save', SubmitType::class, array('label' => 'Creer'));
       
       $form = $formBuilder->getForm();
        
        
       $form->handleRequest($request);
	

      if ($form->isSubmitted()) {

      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)

         if ($form->isValid()) {

        // On enregistre notre objet $livre dans la base de données : 
        
           $em = $this->getDoctrine()->getManager();         
           $em->persist($client);
           $request->getSession()->getFlashBag()->add('notice', 'Votre compte a bien été creer. N hesitez pas à nous contacter à cette adresse 
               en cas de problème de connexion à votre compte');
           $em->flush();        
           //$request->getSession()->getFlashBag()->add('notice', 'Categorie bien enregistré.');

      // À partir du formBuilder, on génère le formulaire
    // On redirige vers la page de visualisation du livre nouvellement créé

        return $this->redirectToRoute('dreamhotel_reserver', array('id' => $client->getId()));
         
         
         }
      }
        return $this->render('DREAMHOTELCompteBundle:Default:signup.html.twig', array(

            'form' => $form->createView(),

        ));
    }
}

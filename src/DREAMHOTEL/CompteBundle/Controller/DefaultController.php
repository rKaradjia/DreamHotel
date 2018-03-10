<?php

namespace DREAMHOTEL\CompteBundle\Controller;

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

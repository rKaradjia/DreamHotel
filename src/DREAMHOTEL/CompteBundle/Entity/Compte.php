<?php
namespace DREAMHOTEL\CompteBundle\Entity;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Compte
{
    
    protected $id;
    protected $mdp;
    
    protected $nom;
    protected $prenom;
    protected $rue;
    protected $ville;
    
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp(/*\DateTime $dueDate = null*/$mdp)
    {
        $this->mdp = $mdp;
    }
    
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom(/*\DateTime $dueDate = null*/$nom)
    {
        $this->nom = $nom;
    }
    
    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom(/*\DateTime $dueDate = null*/$prenom)
    {
        $this->prenom = $prenom;
    }
    
    public function getRue()
    {
        return $this->rue;
    }

    public function setRue(/*\DateTime $dueDate = null*/$rue)
    {
        $this->rue = $rue;
    }
    
    
    public function getVille()
    {
        return $this->ville;
    }

    public function setVille(/*\DateTime $dueDate = null*/$ville)
    {
        $this->ville = $ville;
    }
}
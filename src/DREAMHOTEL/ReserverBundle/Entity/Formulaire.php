<?php 

namespace DREAMHOTEL\ReserverBundle\Entity;






class Formulaire
{
    protected $saisieid;
    protected $saisiemdp;
    protected $typeChambre;
    protected $formuleChambre;
    protected $salle;
    protected $activite;

    public function getSaisieid()
    {
        return $this->saisieid;
    }

    public function setSaisieid($saisieid)
    {
        $this->saisieid = $saisieid;
    }

    public function getSaisiemdp()
    {
        return $this->saisiemdp;
    }

    public function setSaisiemdp(/*\DateTime $dueDate = null*/$saisiemdp)
    {
        $this->saisiemdp = $saisiemdp;
    }
    
    public function getFormuleChambre()
    {
        return $this->formuleChambre;
    }

    public function setFormuleChambre(/*\DateTime $dueDate = null*/$formuleChambre)
    {
        $this->formuleChambre = $formuleChambre;
    }
    
    
    public function getTypeChambre()
    {
        return $this->typeChambre;
    }

    public function setTypeChambre(/*\DateTime $dueDate = null*/$typeChambre)
    {
        $this->typeChambre = $typeChambre;
    }
    
    public function getSalle()
    {
        return $this->salle;
    }

    public function setSalle(/*\DateTime $dueDate = null*/$salle)
    {
        $this->salle = $salle;
    }
    
    public function getActivite()
    {
        return $this->activite;
    }

    public function setActivite(/*\DateTime $dueDate = null*/$activite)
    {
        $this->activite = $activite;
    }
    /*setTypeCahmbre('typeChambres');
        $task->setFormule('formuleChambre');*/
}
?>


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


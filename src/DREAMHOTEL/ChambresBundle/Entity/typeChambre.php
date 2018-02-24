<?php

namespace DREAMHOTEL\ChambresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * typeChambre
 *
 * @ORM\Table(name="type_chambre")
 * @ORM\Entity(repositoryClass="DREAMHOTEL\ChambresBundle\Repository\typeChambreRepository")
 */
class typeChambre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30)
     */
    private $type;
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="prix", type="integer")
     */
    private $prix;
    

    /**
     * @var string
     *
     * @ORM\Column(name="formule", type="string", length=30)
     */
    private $formule;

    /**
     * @var bool
     *
     * @ORM\Column(name="climatisation", type="boolean")
     */
    private $climatisation;

    /**
     * @var bool
     *
     * @ORM\Column(name="telephone", type="boolean")
     */
    private $telephone;

    /**
     * @var bool
     *
     * @ORM\Column(name="ecran", type="boolean")
     */
    private $ecran;

    /**
     * @var bool
     *
     * @ORM\Column(name="wifi", type="boolean")
     */
    private $wifi;

    /**
     * @var bool
     *
     * @ORM\Column(name="bureau", type="boolean")
     */
    private $bureau;

    /**
     * @var bool
     *
     * @ORM\Column(name="produitToilette", type="boolean")
     */
    private $produitToilette;
    
    
    /**
     * @var bool
     *
     * @ORM\Column(name="coffrefort", type="boolean")
     */
    private $coffrefort;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="sechecheveux", type="boolean")
     */
    private $sechecheveux;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="prise", type="boolean")
     */
    private $prise;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="salon", type="boolean")
     */
    private $salon;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="minibar", type="boolean")
     */
    private $minibar;
    
    /**
     * @var bool
     *
     * @ORM\Column(name="dressing", type="boolean")
     */
    private $dressing;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return typeChambre
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set formule
     *
     * @param string $formule
     *
     * @return typeChambre
     */
    public function setFormule($formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return string
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set climatisation
     *
     * @param boolean $climatisation
     *
     * @return typeChambre
     */
    public function setClimatisation($climatisation)
    {
        $this->climatisation = $climatisation;

        return $this;
    }

    /**
     * Get climatisation
     *
     * @return bool
     */
    public function getClimatisation()
    {
        return $this->climatisation;
    }

    /**
     * Set telephone
     *
     * @param boolean $telephone
     *
     * @return typeChambre
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return bool
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set ecran
     *
     * @param boolean $ecran
     *
     * @return typeChambre
     */
    public function setEcran($ecran)
    {
        $this->ecran = $ecran;

        return $this;
    }

    /**
     * Get ecran
     *
     * @return bool
     */
    public function getEcran()
    {
        return $this->ecran;
    }

    /**
     * Set wifi
     *
     * @param boolean $wifi
     *
     * @return typeChambre
     */
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    /**
     * Get wifi
     *
     * @return bool
     */
    public function getWifi()
    {
        return $this->wifi;
    }

    /**
     * Set bureau
     *
     * @param boolean $bureau
     *
     * @return typeChambre
     */
    public function setBureau($bureau)
    {
        $this->bureau = $bureau;

        return $this;
    }

    /**
     * Get bureau
     *
     * @return bool
     */
    public function getBureau()
    {
        return $this->bureau;
    }

    /**
     * Set produitToilette
     *
     * @param boolean $produitToilette
     *
     * @return typeChambre
     */
    public function setProduitToilette($produitToilette)
    {
        $this->produitToilette = $produitToilette;

        return $this;
    }

    /**
     * Get produitToilette
     *
     * @return bool
     */
    public function getProduitToilette()
    {
        return $this->produitToilette;
    }
    
    
    /**
     * Set coffrefort
     *
     * @param boolean $coffrefort
     *
     * @return typeChambre
     */
    public function setCoffrefort($coffrefort)
    {
        $this->coffrefort = $coffrefort;

        return $this;
    }

    /**
     * Get coffrefort
     *
     * @return bool
     */
    public function getCoffrefort()
    {
        return $this->coffrefort;
    }
    
    
    /**
     * Set sechecheveux
     *
     * @param boolean $sechecheveux
     *
     * @return typeChambre
     */
    public function setSechecheuveux($sechecheveux)
    {
        $this->sechecheveux = $sechecheveux;

        return $this;
    }

    /**
     * Get sechecheveux
     *
     * @return bool
     */
    public function getSechecheveux()
    {
        return $this->seche;
    }
    
    
    
    /**
     * Set prise
     *
     * @param boolean $prise
     *
     * @return typeChambre
     */
    public function setPrise($prise)
    {
        $this->prise = $prise;

        return $this;
    }

    /**
     * Get prise
     *
     * @return bool
     */
    public function getPrise()
    {
        return $this->prise;
    }
    
    
    
    
    /**
     * Set salon
     *
     * @param boolean $salon
     *
     * @return typeChambre
     */
    public function setSalon($salon)
    {
        $this->salon = $salon;

        return $this;
    }

    /**
     * Get salon
     *
     * @return bool
     */
    public function getSalon()
    {
        return $this->salon;
    }
    
    
    
    
    /**
     * Set minibar
     *
     * @param boolean $minibar
     *
     * @return typeChambre
     */
    public function setMinibar($minibar)
    {
        $this->minibar = $minibar;

        return $this;
    }

    /**
     * Get minibar
     *
     * @return bool
     */
    public function getMinibar()
    {
        return $this->minibar;
    }
    
    
    
    /**
     * Set dressing
     *
     * @param boolean $dressing
     *
     * @return typeChambre
     */
    public function setDressing($dressing)
    {
        $this->dressing = $dressing;

        return $this;
    }

    /**
     * Get dressing
     *
     * @return bool
     */
    public function getDressing()
    {
        return $this->dressing;
    }
    
    
    
    
    
    /**
     * Set prix
     *
     * @param integer $prix
     *
     * @return int
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

}


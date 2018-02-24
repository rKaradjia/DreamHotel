<?php

namespace DREAMHOTEL\SallesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * salles
 *
 * @ORM\Table(name="salles")
 * @ORM\Entity(repositoryClass="DREAMHOTEL\SallesBundle\Repository\sallesRepository")
 */
class salles
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
     * @ORM\Column(name="dimension", type="string", length=15)
     */
    private $dimension;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=30)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="nbPersMax", type="integer")
     */
    private $nbPersMax;

    /**
     * @var bool
     *
     * @ORM\Column(name="estDispo", type="boolean")
     */
    private $estDispo;

    /**
     * @var string
     *
     * @ORM\Column(name="information", type="string", length=255, nullable=true)
     */
    private $information;


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
     * Set dimension
     *
     * @param string $dimension
     *
     * @return salles
     */
    public function setDimension($dimension)
    {
        $this->dimension = $dimension;

        return $this;
    }

    /**
     * Get dimension
     *
     * @return string
     */
    public function getDimension()
    {
        return $this->dimension;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return salles
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set nbPersMax
     *
     * @param integer $nbPersMax
     *
     * @return salles
     */
    public function setNbPersMax($nbPersMax)
    {
        $this->nbPersMax = $nbPersMax;

        return $this;
    }

    /**
     * Get nbPersMax
     *
     * @return int
     */
    public function getNbPersMax()
    {
        return $this->nbPersMax;
    }

    /**
     * Set estDispo
     *
     * @param boolean $estDispo
     *
     * @return salles
     */
    public function setEstDispo($estDispo)
    {
        $this->estDispo = $estDispo;

        return $this;
    }

    /**
     * Get estDispo
     *
     * @return bool
     */
    public function getEstDispo()
    {
        return $this->estDispo;
    }

    /**
     * Set information
     *
     * @param string $information
     *
     * @return salles
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }
}


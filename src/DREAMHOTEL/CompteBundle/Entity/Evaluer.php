<?php

namespace DREAMHOTEL\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * evaluer
 *
 * @ORM\Table(name="evaluer")
 * @ORM\Entity(repositoryClass="DREAMHOTEL\CompteBundle\Repository\evaluerRepository")
 */
class Evaluer
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
     * @var int
     *
     * @ORM\Column(name="acceuil", type="integer", nullable=true)
     */
    private $acceuil;

    /**
     * @var int
     *
     * @ORM\Column(name="disponibilite", type="integer", nullable=true)
     */
    private $disponibilite;

    /**
     * @var int
     *
     * @ORM\Column(name="qualite", type="integer", nullable=true)
     */
    private $qualite;

    /**
     * @var int
     *
     * @ORM\Column(name="idReservation", type="integer")
     */
    private $idReservation;


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
     * Set acceuil
     *
     * @param integer $acceuil
     *
     * @return evaluer
     */
    public function setAcceuil($acceuil)
    {
        $this->acceuil = $acceuil;

        return $this;
    }

    /**
     * Get acceuil
     *
     * @return int
     */
    public function getAcceuil()
    {
        return $this->acceuil;
    }

    /**
     * Set disponibilite
     *
     * @param integer $disponibilite
     *
     * @return evaluer
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return int
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set qualite
     *
     * @param integer $qualite
     *
     * @return evaluer
     */
    public function setQualite($qualite)
    {
        $this->qualite = $qualite;

        return $this;
    }

    /**
     * Get qualite
     *
     * @return int
     */
    public function getQualite()
    {
        return $this->qualite;
    }

    /**
     * Set idReservation
     *
     * @param integer $idReservation
     *
     * @return evaluer
     */
    public function setIdReservation($idReservation)
    {
        $this->idReservation = $idReservation;

        return $this;
    }

    /**
     * Get idReservation
     *
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }
}


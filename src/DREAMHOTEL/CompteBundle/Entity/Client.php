<?php

namespace DREAMHOTEL\CompteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="DREAMHOTEL\CompteBundle\Repository\clientRepository")
 */
class Client
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
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="villeResidence", type="string", length=50)
     */
    private $villeResidence;

    /**
     * @var string
     *
     * @ORM\Column(name="rueResidence", type="string", length=30)
     */
    private $rueResidence;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiantCo", type="string", length=50)
     */
    private $identifiantCo;

    /**
     * @var string
     *
     * @ORM\Column(name="mdpCo", type="string", length=50)
     */
    private $mdpCo;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set villeResidence
     *
     * @param string $villeResidence
     *
     * @return client
     */
    public function setVilleResidence($villeResidence)
    {
        $this->villeResidence = $villeResidence;

        return $this;
    }

    /**
     * Get villeResidence
     *
     * @return string
     */
    public function getVilleResidence()
    {
        return $this->villeResidence;
    }

    /**
     * Set rueResidence
     *
     * @param string $rueResidence
     *
     * @return client
     */
    public function setRueResidence($rueResidence)
    {
        $this->rueResidence = $rueResidence;

        return $this;
    }

    /**
     * Get rueResidence
     *
     * @return string
     */
    public function getRueResidence()
    {
        return $this->rueResidence;
    }

    /**
     * Set identifiantCo
     *
     * @param string $identifiantCo
     *
     * @return client
     */
    public function setIdentifiantCo($identifiantCo)
    {
        $this->identifiantCo = $identifiantCo;

        return $this;
    }

    /**
     * Get identifiantCo
     *
     * @return string
     */
    public function getIdentifiantCo()
    {
        return $this->identifiantCo;
    }

    /**
     * Set mdpCo
     *
     * @param string $mdpCo
     *
     * @return client
     */
    public function setMdpCo($mdpCo)
    {
        $this->mdpCo = $mdpCo;

        return $this;
    }

    /**
     * Get mdpCo
     *
     * @return string
     */
    public function getMdpCo()
    {
        return $this->mdpCo;
    }
}


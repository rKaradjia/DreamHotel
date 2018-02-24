<?php

namespace DREAMHOTEL\ReserverBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="DREAMHOTEL\ReserverBundle\Repository\reservationRepository")
 */
class reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReserv", type="date")
     */
    private $dateReserv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLimiteReserv", type="date")
     */
    private $dateLimiteReserv;

    
    /**

   * @ORM\ManyToOne(targetEntity="DREAMHOTEL\CompteBundle\Entity\Client")

   * @ORM\JoinColumn(nullable=false)

   */
   private $client;
   
   
   
   /**

   * @ORM\OneToOne(targetEntity="DREAMHOTEL\CompteBundle\Entity\Evaluer", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)

   */

  private $evaluer;
   
   /**

   * @ORM\ManyToMany(targetEntity="DREAMHOTEL\ChambresBundle\Entity\chambres", cascade={"persist"})

   */

  private $chambres;

  /**

   * @ORM\ManyToMany(targetEntity="DREAMHOTEL\SallesBundle\Entity\salles", cascade={"persist"})

   */

  private $salles;

  
  /**

   * @ORM\ManyToMany(targetEntity="DREAMHOTEL\ActivitesBundle\Entity\activites", cascade={"persist"})

   */

  private $activites;


  // Comme la propriété $categories doit être un ArrayCollection,

  // On doit la définir dans un constructeur :

  public function __construct()

  {

    $this->date = new \Datetime();

    $this->chambres = new ArrayCollection();
    $this->salles = new ArrayCollection();
    $this->activites = new ArrayCollection();

  }


  // CHAMBRES

  public function addChambre(chambres $chambre)

  {

    // Ici, on utilise l'ArrayCollection vraiment comme un tableau

    $this->categories[] = $chambre;


    return $this;

  }


  public function removeChambre(chambres $chambre)

  {

    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument

    $this->chambres->removeElement($chambre);

  }


  // Notez le pluriel, on récupère une liste de catégories ici !

  public function getChambre()

  {

    return $this->chambres;

  }

  
  
  //SALLES
    public function addSalle(salles $salle)

    {

    // Ici, on utilise l'ArrayCollection vraiment comme un tableau

        $this->salles[] = $salle;


        return $this;

    }


    public function removeSalle(salles $chambre)

    {

    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument

        $this->chambres->removeElement($chambre);

    }


  // Notez le pluriel, on récupère une liste de catégories ici !

    public function getSalles()

    {

        return $this->salles;

    }
    
    
    
    
    //Activites
    public function addAtivite(activites $activite)

    {

    // Ici, on utilise l'ArrayCollection vraiment comme un tableau

        $this->activites[] = $activite;


        return $this;

    }


    public function removeActivite(activites $activite)

    {

    // Ici on utilise une méthode de l'ArrayCollection, pour supprimer la catégorie en argument

        $this->activites->removeElement($activite);

    }


  // Notez le pluriel, on récupère une liste de catégories ici !

    public function getActivites()

    {

        return $this->activites;

    }
    
    
    
    
    
    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer")
     */
   // private $idClient;


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
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set dateReserv
     *
     * @param \DateTime $dateReserv
     *
     * @return reservation
     */
    public function setDateReserv($dateReserv)
    {
        $this->dateReserv = $dateReserv;

        return $this;
    }

    /**
     * Get dateReserv
     *
     * @return \DateTime
     */
    public function getDateReserv()
    {
        return $this->dateReserv;
    }

    /**
     * Set dateLimiteReserv
     *
     * @param \DateTime $dateLimiteReserv
     *
     * @return reservation
     */
    public function setDateLimiteReserv($dateLimiteReserv)
    {
        $this->dateLimiteReserv = $dateLimiteReserv;

        return $this;
    }

    /**
     * Get dateLimiteReserv
     *
     * @return \DateTime
     */
    public function getDateLimiteReserv()
    {
        return $this->dateLimiteReserv;
    }

    
    public function setClient(Client $client)

  {

    $this->client = $client;


    return $this;

  }


  public function getClient()

  {

    return $this->client;

  }
  
  
  
  
  public function setEvaluer(Evaluer $evaluer)

  {

    $this->evaluer = $evaluer;


    return $this;

  }


  public function getEvaluer()

  {

    return $this->evaluer;

  }
  
    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return reservation
     */
   /* public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }*/

    /**
     * Get idClient
     *
     * @return int
     */
   /* public function getIdClient()
    {
        return $this->idClient;
    }*/
}


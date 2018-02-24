<?php

namespace DREAMHOTEL\ChambresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chambres
 *
 * @ORM\Table(name="chambres")
 * @ORM\Entity(repositoryClass="DREAMHOTEL\ChambresBundle\Repository\chambresRepository")
 */
class chambres
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
     * @var bool
     *
     * @ORM\Column(name="estDisponible", type="boolean")
     */
    private $estDisponible;

   

     /**

   * @ORM\ManyToOne(targetEntity="DREAMHOTEL\ChambresBundle\Entity\chambres")

   * @ORM\JoinColumn(nullable=false)

   */

  private $typeChambre;
  
  
     public function setTypeChambre(typeChambre $typeChambre)

  {

    $this->typeChambre = $typeChambre;


    return $this;

  }


  public function getTypeChambre()

  {

    return $this->typeChambre;

  }
    
    
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
     * Set estDisponible
     *
     * @param boolean $estDisponible
     *
     * @return chambres
     */
    public function setEstDisponible($estDisponible)
    {
        $this->estDisponible = $estDisponible;

        return $this;
    }

    /**
     * Get estDisponible
     *
     * @return bool
     */
    public function getEstDisponible()
    {
        return $this->estDisponible;
    }

    /**
     * Set idType
     *
     * @param integer $idType
     *
     * @return chambres
     */
    /*public function setIdType($idType)
    {
        $this->idType = $idType;

        return $this;
    }
*/
    /**
     * Get idType
     *
     * @return int
     */
 /*   public function getIdType()
    {
        return $this->idType;
    }*/
}


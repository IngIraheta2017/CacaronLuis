<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * asignacion
 *
 * @ORM\Table(name="asignacion")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\asignacionRepository")
 */
class asignacion
{

  // ...

   /**
    * @ORM\ManyToOne(targetEntity="Proyecto", inversedBy="asignacioness")
    */
   private $proyecto;

  // ...

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set proyecto
     *
     * @param \CidesBundle\Entity\Proyecto $proyecto
     * @return asignacion
     */
    public function setProyecto(\CidesBundle\Entity\Proyecto $proyecto = null)
    {
        $this->proyecto = $proyecto;

        return $this;
    }

    /**
     * Get proyecto
     *
     * @return \CidesBundle\Entity\Proyecto 
     */
    public function getProyecto()
    {
        return $this->proyecto;
    }
}

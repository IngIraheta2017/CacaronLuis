<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjetivoProyecto
 *
 * @ORM\Table(name="objetivo_proyecto")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\ObjetivoProyectoRepository")
 */
class ObjetivoProyecto
{


  // ...

   /**
    * @ORM\ManyToOne(targetEntity="Proyecto", inversedBy="objetivoProyecto")
    */
   private $objetivosProyecto;

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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     * @return ObjetivoProyecto
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set objetivoPsroyecto
     *
     * @param \CidesBundle\Entity\Proyecto $objetivoPsroyecto
     * @return ObjetivoProyecto
     */
    public function setObjetivoPsroyecto(\CidesBundle\Entity\Proyecto $objetivoPsroyecto = null)
    {
        $this->objetivoPsroyecto = $objetivoPsroyecto;

        return $this;
    }

    /**
     * Get objetivoPsroyecto
     *
     * @return \CidesBundle\Entity\Proyecto
     */
    public function getObjetivoPsroyecto()
    {
        return $this->objetivoPsroyecto;
    }

    /**
     * Set objetivosProyecto
     *
     * @param \CidesBundle\Entity\Proyecto $objetivosProyecto
     * @return ObjetivoProyecto
     */
    public function setObjetivosProyecto(\CidesBundle\Entity\Proyecto $objetivosProyecto = null)
    {
        $this->objetivosProyecto = $objetivosProyecto;

        return $this;
    }

    /**
     * Get objetivosProyecto
     *
     * @return \CidesBundle\Entity\Proyecto 
     */
    public function getObjetivosProyecto()
    {
        return $this->objetivosProyecto;
    }
}

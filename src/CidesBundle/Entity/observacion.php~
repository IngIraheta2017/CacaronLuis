<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * observacion
 *
 * @ORM\Table(name="observacion")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\observacionRepository")
 */
class observacion
{
  // ...

   /**
    * @ORM\ManyToOne(targetEntity="Proyecto", inversedBy="observaciones")
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
     * @var string
     *
     * @ORM\Column(name="titulo_observacion", type="string", length=50)
     */
    private $tituloObservacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_observacion", type="string", length=255)
     */
    private $descripcionObservacion;


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
     * Set tituloObservacion
     *
     * @param string $tituloObservacion
     * @return observacion
     */
    public function setTituloObservacion($tituloObservacion)
    {
        $this->tituloObservacion = $tituloObservacion;

        return $this;
    }

    /**
     * Get tituloObservacion
     *
     * @return string
     */
    public function getTituloObservacion()
    {
        return $this->tituloObservacion;
    }

    /**
     * Set descripcionObservacion
     *
     * @param string $descripcionObservacion
     * @return observacion
     */
    public function setDescripcionObservacion($descripcionObservacion)
    {
        $this->descripcionObservacion = $descripcionObservacion;

        return $this;
    }

    /**
     * Get descripcionObservacion
     *
     * @return string
     */
    public function getDescripcionObservacion()
    {
        return $this->descripcionObservacion;
    }

    /**
     * Set proyecto
     *
     * @param \CidesBundle\Entity\Proyecto $proyecto
     * @return observacion
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

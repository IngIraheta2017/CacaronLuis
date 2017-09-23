<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadoProyecto
 *
 * @ORM\Table(name="estado_proyecto")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\EstadoProyectoRepository")
 */
class EstadoProyecto
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
     * @ORM\Column(name="nombre_EP", type="string", length=255)
     */
    private $nombreEP;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_EP", type="text", nullable=true)
     */
    private $descripcionEP;


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
     * Set nombreEP
     *
     * @param string $nombreEP
     * @return EstadoProyecto
     */
    public function setNombreEP($nombreEP)
    {
        $this->nombreEP = $nombreEP;

        return $this;
    }

    /**
     * Get nombreEP
     *
     * @return string 
     */
    public function getNombreEP()
    {
        return $this->nombreEP;
    }

    /**
     * Set descripcionEP
     *
     * @param string $descripcionEP
     * @return EstadoProyecto
     */
    public function setDescripcionEP($descripcionEP)
    {
        $this->descripcionEP = $descripcionEP;

        return $this;
    }

    /**
     * Get descripcionEP
     *
     * @return string 
     */
    public function getDescripcionEP()
    {
        return $this->descripcionEP;
    }
}

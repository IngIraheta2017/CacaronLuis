<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recurso
 *
 * @ORM\Table(name="recurso")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\RecursoRepository")
 */
class Recurso
{
  // ...

  /**
    * One Recurso has One TipoDeRecurso.
    * @ORM\OneToOne(targetEntity="TipoDeRecurso")
    */
  private $TipoDeRecurso;
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
     * @ORM\Column(name="nombre_recurso", type="string", length=64)
     */
    private $nombreRecurso;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_recurso", type="string", length=255)
     */
    private $descripcionRecurso;


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
     * Set nombreRecurso
     *
     * @param string $nombreRecurso
     * @return Recurso
     */
    public function setNombreRecurso($nombreRecurso)
    {
        $this->nombreRecurso = $nombreRecurso;

        return $this;
    }

    /**
     * Get nombreRecurso
     *
     * @return string
     */
    public function getNombreRecurso()
    {
        return $this->nombreRecurso;
    }

    /**
     * Set descripcionRecurso
     *
     * @param string $descripcionRecurso
     * @return Recurso
     */
    public function setDescripcionRecurso($descripcionRecurso)
    {
        $this->descripcionRecurso = $descripcionRecurso;

        return $this;
    }

    /**
     * Get descripcionRecurso
     *
     * @return string
     */
    public function getDescripcionRecurso()
    {
        return $this->descripcionRecurso;
    }

    /**
     * Set TipoDeRecurso
     *
     * @param \CidesBundle\Entity\TipoDeRecurso $tipoDeRecurso
     * @return Recurso
     */
    public function setTipoDeRecurso(\CidesBundle\Entity\TipoDeRecurso $tipoDeRecurso = null)
    {
        $this->TipoDeRecurso = $tipoDeRecurso;

        return $this;
    }

    /**
     * Get TipoDeRecurso
     *
     * @return \CidesBundle\Entity\TipoDeRecurso 
     */
    public function getTipoDeRecurso()
    {
        return $this->TipoDeRecurso;
    }
}

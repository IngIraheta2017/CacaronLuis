<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDeRecurso
 *
 * @ORM\Table(name="tipo_de_recurso")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\TipoDeRecursoRepository")
 */
class TipoDeRecurso
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
     * @ORM\Column(name="nombre_de_tipo_de_recurso", type="string", length=255, unique=true)
     */
    private $nombreDeTipoDeRecurso;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_tipo_de_recurso", type="string", length=255, unique=true)
     */
    private $descripcionTipoDeRecurso;


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
     * Set nombreDeTipoDeRecurso
     *
     * @param string $nombreDeTipoDeRecurso
     * @return TipoDeRecurso
     */
    public function setNombreDeTipoDeRecurso($nombreDeTipoDeRecurso)
    {
        $this->nombreDeTipoDeRecurso = $nombreDeTipoDeRecurso;

        return $this;
    }

    /**
     * Get nombreDeTipoDeRecurso
     *
     * @return string 
     */
    public function getNombreDeTipoDeRecurso()
    {
        return $this->nombreDeTipoDeRecurso;
    }

    /**
     * Set descripcionTipoDeRecurso
     *
     * @param string $descripcionTipoDeRecurso
     * @return TipoDeRecurso
     */
    public function setDescripcionTipoDeRecurso($descripcionTipoDeRecurso)
    {
        $this->descripcionTipoDeRecurso = $descripcionTipoDeRecurso;

        return $this;
    }

    /**
     * Get descripcionTipoDeRecurso
     *
     * @return string 
     */
    public function getDescripcionTipoDeRecurso()
    {
        return $this->descripcionTipoDeRecurso;
    }
}

<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * categoriaProyecto
 *
 * @ORM\Table(name="categoria_proyecto")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\categoriaProyectoRepository")
 */
class categoriaProyecto
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
     * @ORM\Column(name="nombre_categoria", type="string", length=255, unique=true)
     */
    private $nombreCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_categoria", type="string", length=255, unique=true)
     */
    private $descripcionCategoria;


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
     * Set nombreCategoria
     *
     * @param string $nombreCategoria
     * @return categoriaProyecto
     */
    public function setNombreCategoria($nombreCategoria)
    {
        $this->nombreCategoria = $nombreCategoria;

        return $this;
    }

    /**
     * Get nombreCategoria
     *
     * @return string 
     */
    public function getNombreCategoria()
    {
        return $this->nombreCategoria;
    }

    /**
     * Set descripcionCategoria
     *
     * @param string $descripcionCategoria
     * @return categoriaProyecto
     */
    public function setDescripcionCategoria($descripcionCategoria)
    {
        $this->descripcionCategoria = $descripcionCategoria;

        return $this;
    }

    /**
     * Get descripcionCategoria
     *
     * @return string 
     */
    public function getDescripcionCategoria()
    {
        return $this->descripcionCategoria;
    }
}

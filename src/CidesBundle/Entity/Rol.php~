<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\RolRepository")
 */
class Rol
{

    /**
     * Many Rol have Many MenuItem.
     * @ORM\ManyToMany(targetEntity="MenuItem")
     * @ORM\JoinTable(name="Permisos",
     *      joinColumns={@ORM\JoinColumn(name="rol_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="menu_item_id", referencedColumnName="id")}
     *      )
     */
    private $menuItems;



    public function menuItems__construct() {
        $this->menuItems = new \Doctrine\Common\Collections\ArrayCollection();
    }
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
     * @ORM\Column(name="nombre_rol", type="string", length=64)
     */
    private $nombreRol;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_rol", type="string", length=255, unique=true)
     */
    private $descripcionRol;


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
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return Rol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set descripcionRol
     *
     * @param string $descripcionRol
     * @return Rol
     */
    public function setDescripcionRol($descripcionRol)
    {
        $this->descripcionRol = $descripcionRol;

        return $this;
    }

    /**
     * Get descripcionRol
     *
     * @return string
     */
    public function getDescripcionRol()
    {
        return $this->descripcionRol;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->menuItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add menuItems
     *
     * @param \CidesBundle\Entity\MenuItem $menuItems
     * @return Rol
     */
    public function addMenuItem(\CidesBundle\Entity\MenuItem $menuItems)
    {
        $this->menuItems[] = $menuItems;

        return $this;
    }

    /**
     * Remove menuItems
     *
     * @param \CidesBundle\Entity\MenuItem $menuItems
     */
    public function removeMenuItem(\CidesBundle\Entity\MenuItem $menuItems)
    {
        $this->menuItems->removeElement($menuItems);
    }

    /**
     * Get menuItems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMenuItems()
    {
        return $this->menuItems;
    }
}

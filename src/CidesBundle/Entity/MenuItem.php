<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * MenuItem
 *
 * @ORM\Table(name="menu_item")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\MenuItemRepository")
 */
class MenuItem
{
  // ...
  /**
   * One MenuItem has Many MenuItem.
   * @ORM\OneToMany(targetEntity="MenuItem", mappedBy="Item")
   */
  private $subItem;

  /**
   * Many  MenuItem have One  MenuItem.
   * @ORM\ManyToOne(targetEntity="MenuItem", inversedBy="subItem")
   */
  private $Item;
  // ...

  public function subItem__construct() {
      $this->subItem = new \Doctrine\Common\Collections\ArrayCollection();
  }


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
     * Constructor
     */
    public function __construct()
    {
        $this->subItem = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add subItem
     *
     * @param \CidesBundle\Entity\MenuItem $subItem
     * @return MenuItem
     */
    public function addSubItem(\CidesBundle\Entity\MenuItem $subItem)
    {
        $this->subItem[] = $subItem;

        return $this;
    }

    /**
     * Remove subItem
     *
     * @param \CidesBundle\Entity\MenuItem $subItem
     */
    public function removeSubItem(\CidesBundle\Entity\MenuItem $subItem)
    {
        $this->subItem->removeElement($subItem);
    }

    /**
     * Get subItem
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubItem()
    {
        return $this->subItem;
    }

    /**
     * Set Item
     *
     * @param \CidesBundle\Entity\MenuItem $item
     * @return MenuItem
     */
    public function setItem(\CidesBundle\Entity\MenuItem $item = null)
    {
        $this->Item = $item;

        return $this;
    }

    /**
     * Get Item
     *
     * @return \CidesBundle\Entity\MenuItem 
     */
    public function getItem()
    {
        return $this->Item;
    }
}

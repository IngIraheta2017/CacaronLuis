<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultado
 *
 * @ORM\Table(name="resultado")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\ResultadoRepository")
 */
class Resultado
{
  // ...

   /**
    * @ORM\ManyToOne(targetEntity="Indicador", inversedBy="resultados")
    */
   private $indicador;

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
     * Set indicador
     *
     * @param \CidesBundle\Entity\Indicador $indicador
     * @return Resultado
     */
    public function setIndicador(\CidesBundle\Entity\Indicador $indicador = null)
    {
        $this->indicador = $indicador;

        return $this;
    }

    /**
     * Get indicador
     *
     * @return \CidesBundle\Entity\Indicador 
     */
    public function getIndicador()
    {
        return $this->indicador;
    }
}

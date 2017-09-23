<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Indicador
 *
 * @ORM\Table(name="indicador")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\IndicadorRepository")
 */
class Indicador
{
  // ...

      /**
       * @ORM\OneToMany(targetEntity="Resultado", mappedBy="Indicador")
       */
      private $resultados;

      public function resultados__construct()
      {
          $this->resultados = new ArrayCollection();
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
     * @ORM\Column(name="nombre_indicador", type="string", length=64, unique=true)
     */
    private $nombreIndicador;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_indicador", type="string", length=255, unique=true)
     */
    private $descripcionIndicador;

    /**
     * @var string
     *
     * @ORM\Column(name="unidad_de_medida", type="string", length=32)
     */
    private $unidadDeMedida;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_esperado", type="string", length=255)
     */
    private $valorEsperado;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_indicador", type="string", length=255, unique=true)
     */
    private $tipoIndicador;


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
     * Set nombreIndicador
     *
     * @param string $nombreIndicador
     * @return Indicador
     */
    public function setNombreIndicador($nombreIndicador)
    {
        $this->nombreIndicador = $nombreIndicador;

        return $this;
    }

    /**
     * Get nombreIndicador
     *
     * @return string
     */
    public function getNombreIndicador()
    {
        return $this->nombreIndicador;
    }

    /**
     * Set descripcionIndicador
     *
     * @param string $descripcionIndicador
     * @return Indicador
     */
    public function setDescripcionIndicador($descripcionIndicador)
    {
        $this->descripcionIndicador = $descripcionIndicador;

        return $this;
    }

    /**
     * Get descripcionIndicador
     *
     * @return string
     */
    public function getDescripcionIndicador()
    {
        return $this->descripcionIndicador;
    }

    /**
     * Set unidadDeMedida
     *
     * @param string $unidadDeMedida
     * @return Indicador
     */
    public function setUnidadDeMedida($unidadDeMedida)
    {
        $this->unidadDeMedida = $unidadDeMedida;

        return $this;
    }

    /**
     * Get unidadDeMedida
     *
     * @return string
     */
    public function getUnidadDeMedida()
    {
        return $this->unidadDeMedida;
    }

    /**
     * Set valorEsperado
     *
     * @param string $valorEsperado
     * @return Indicador
     */
    public function setValorEsperado($valorEsperado)
    {
        $this->valorEsperado = $valorEsperado;

        return $this;
    }

    /**
     * Get valorEsperado
     *
     * @return string
     */
    public function getValorEsperado()
    {
        return $this->valorEsperado;
    }

    /**
     * Set tipoIndicador
     *
     * @param string $tipoIndicador
     * @return Indicador
     */
    public function setTipoIndicador($tipoIndicador)
    {
        $this->tipoIndicador = $tipoIndicador;

        return $this;
    }

    /**
     * Get tipoIndicador
     *
     * @return string
     */
    public function getTipoIndicador()
    {
        return $this->tipoIndicador;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->resultados = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add resultados
     *
     * @param \CidesBundle\Entity\Resultado $resultados
     * @return Indicador
     */
    public function addResultado(\CidesBundle\Entity\Resultado $resultados)
    {
        $this->resultados[] = $resultados;

        return $this;
    }

    /**
     * Remove resultados
     *
     * @param \CidesBundle\Entity\Resultado $resultados
     */
    public function removeResultado(\CidesBundle\Entity\Resultado $resultados)
    {
        $this->resultados->removeElement($resultados);
    }

    /**
     * Get resultados
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getResultados()
    {
        return $this->resultados;
    }
}

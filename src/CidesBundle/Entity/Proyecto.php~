<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\ProyectoRepository")
 */
class Proyecto
{

  // ...

      /**
       * @ORM\OneToMany(targetEntity="observacion", mappedBy="Proyecto")
       */
      private $observaciones;

      public function observaciones__construct()
      {
          $this->observaciones = new ArrayCollection();
      }
    // ...

    // ...

        /**
         * @ORM\OneToMany(targetEntity="asignacion", mappedBy="Proyecto")
         */
        private $asignaciones;

        public function asignaciones__construct()
        {
            $this->asignaciones = new ArrayCollection();
        }
      // ...

    // ...

        /**
         * @ORM\OneToMany(targetEntity="ObjetivoProyecto", mappedBy="Proyecto")
         */
        private $objetivoProyecto;

        public function objetivoProyecto__construct()
        {
            $this->objetivoProyecto = new ArrayCollection();
        }
      // ...


    // ...

     /**
      * Many Proyectos have Many Recursos.
      * @ORM\ManyToMany(targetEntity="Recurso")
      * @ORM\JoinTable(name="grupo_de_recursos",
      *      joinColumns={@ORM\JoinColumn(name="proyecto_id", referencedColumnName="id")},
      *      inverseJoinColumns={@ORM\JoinColumn(name="recursos_id", referencedColumnName="id")}
      *      )
      */
     private $recursos;

     // ...

     public function recursos__construct() {
         $this->recursos = new \Doctrine\Common\Collections\ArrayCollection();
     }
     // ...



  // ...

  /**
    * One Proyecto has One EstadoProyecto.
    * @ORM\OneToOne(targetEntity="EstadoProyecto")
    */
  private $EstadoProyecto;
// ...

// ...

// ...

/**
  * One Proyecto has One categoriaProyecto.
  * @ORM\OneToOne(targetEntity="categoriaProyecto")
  */
private $categoriaProyecto;
// ...

// ...

/**
  * One Proyecto has One Equipo.
  * @ORM\OneToOne(targetEntity="Equipo")
  */
private $Equipo;
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
     * @ORM\Column(name="nombre_proyecto", type="string", length=64)
     */
     private $temaProyecto;

     /**
      * @var string
      *
      * @ORM\Column(name="tema_proyecto", type="string", length=64)
      */
    private $nombreProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="justificacion_proyecto", type="string", length=255)
     */
    private $justificacionProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="presupuesto", type="string", length=255)
     */
    private $presupuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="resultados_esperados", type="string", length=255)
     */
    private $resultadosEsperados;

    /**
     * @var string
     *
     * @ORM\Column(name="metodologia", type="string", length=64)
     */
    private $metodologia;


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
     * Set nombreProyecto
     *
     * @param string $nombreProyecto
     * @return Proyecto
     */
    public function setNombreProyecto($nombreProyecto)
    {
        $this->nombreProyecto = $nombreProyecto;

        return $this;
    }

    /**
     * Get nombreProyecto
     *
     * @return string
     */
    public function getNombreProyecto()
    {
        return $this->nombreProyecto;
    }

    /**
     * Set justificacionProyecto
     *
     * @param string $justificacionProyecto
     * @return Proyecto
     */
    public function setJustificacionProyecto($justificacionProyecto)
    {
        $this->justificacionProyecto = $justificacionProyecto;

        return $this;
    }

    /**
     * Get justificacionProyecto
     *
     * @return string
     */
    public function getJustificacionProyecto()
    {
        return $this->justificacionProyecto;
    }

    /**
     * Set presupuesto
     *
     * @param string $presupuesto
     * @return Proyecto
     */
    public function setPresupuesto($presupuesto)
    {
        $this->presupuesto = $presupuesto;

        return $this;
    }

    /**
     * Get presupuesto
     *
     * @return string
     */
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }

    /**
     * Set resultadosEsperados
     *
     * @param string $resultadosEsperados
     * @return Proyecto
     */
    public function setResultadosEsperados($resultadosEsperados)
    {
        $this->resultadosEsperados = $resultadosEsperados;

        return $this;
    }

    /**
     * Get resultadosEsperados
     *
     * @return string
     */
    public function getResultadosEsperados()
    {
        return $this->resultadosEsperados;
    }

    /**
     * Set metodologia
     *
     * @param string $metodologia
     * @return Proyecto
     */
    public function setMetodologia($metodologia)
    {
        $this->metodologia = $metodologia;

        return $this;
    }

    /**
     * Get metodologia
     *
     * @return string
     */
    public function getMetodologia()
    {
        return $this->metodologia;
    }

    /**
     * Set EstadoProyecto
     *
     * @param \CidesBundle\Entity\EstadoProyecto $estadoProyecto
     * @return Proyecto
     */
    public function setEstadoProyecto(\CidesBundle\Entity\EstadoProyecto $estadoProyecto = null)
    {
        $this->EstadoProyecto = $estadoProyecto;

        return $this;
    }

    /**
     * Get EstadoProyecto
     *
     * @return \CidesBundle\Entity\EstadoProyecto
     */
    public function getEstadoProyecto()
    {
        return $this->EstadoProyecto;
    }

    /**
     * Set Equipo
     *
     * @param \CidesBundle\Entity\Equipo $equipo
     * @return Proyecto
     */
    public function setEquipo(\CidesBundle\Entity\Equipo $equipo = null)
    {
        $this->Equipo = $equipo;

        return $this;
    }

    /**
     * Get Equipo
     *
     * @return \CidesBundle\Entity\Equipo
     */
    public function getEquipo()
    {
        return $this->Equipo;
    }

    /**
     * Add observaciones
     *
     * @param \CidesBundle\Entity\observacion $observaciones
     * @return Proyecto
     */
    public function addObservacione(\CidesBundle\Entity\observacion $observaciones)
    {
        $this->observaciones[] = $observaciones;

        return $this;
    }

    /**
     * Remove observaciones
     *
     * @param \CidesBundle\Entity\observacion $observaciones
     */
    public function removeObservacione(\CidesBundle\Entity\observacion $observaciones)
    {
        $this->observaciones->removeElement($observaciones);
    }

    /**
     * Get observaciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->observaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->asignaciones = new \Doctrine\Common\Collections\ArrayCollection();
        $this->objetivoProyecto = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recursos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add asignaciones
     *
     * @param \CidesBundle\Entity\asignacion $asignaciones
     * @return Proyecto
     */
    public function addAsignacione(\CidesBundle\Entity\asignacion $asignaciones)
    {
        $this->asignaciones[] = $asignaciones;

        return $this;
    }

    /**
     * Remove asignaciones
     *
     * @param \CidesBundle\Entity\asignacion $asignaciones
     */
    public function removeAsignacione(\CidesBundle\Entity\asignacion $asignaciones)
    {
        $this->asignaciones->removeElement($asignaciones);
    }

    /**
     * Get asignaciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAsignaciones()
    {
        return $this->asignaciones;
    }

    /**
     * Add objetivoProyecto
     *
     * @param \CidesBundle\Entity\ObjetivoProyecto $objetivoProyecto
     * @return Proyecto
     */
    public function addObjetivoProyecto(\CidesBundle\Entity\ObjetivoProyecto $objetivoProyecto)
    {
        $this->objetivoProyecto[] = $objetivoProyecto;

        return $this;
    }

    /**
     * Remove objetivoProyecto
     *
     * @param \CidesBundle\Entity\ObjetivoProyecto $objetivoProyecto
     */
    public function removeObjetivoProyecto(\CidesBundle\Entity\ObjetivoProyecto $objetivoProyecto)
    {
        $this->objetivoProyecto->removeElement($objetivoProyecto);
    }

    /**
     * Get objetivoProyecto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObjetivoProyecto()
    {
        return $this->objetivoProyecto;
    }

    /**
     * Add recursos
     *
     * @param \CidesBundle\Entity\Recurso $recursos
     * @return Proyecto
     */
    public function addRecurso(\CidesBundle\Entity\Recurso $recursos)
    {
        $this->recursos[] = $recursos;

        return $this;
    }

    /**
     * Remove recursos
     *
     * @param \CidesBundle\Entity\Recurso $recursos
     */
    public function removeRecurso(\CidesBundle\Entity\Recurso $recursos)
    {
        $this->recursos->removeElement($recursos);
    }

    /**
     * Get recursos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecursos()
    {
        return $this->recursos;
    }

    /**
     * Set categoriaProyecto
     *
     * @param \CidesBundle\Entity\categoriaProyecto $categoriaProyecto
     * @return Proyecto
     */
    public function setCategoriaProyecto(\CidesBundle\Entity\categoriaProyecto $categoriaProyecto = null)
    {
        $this->categoriaProyecto = $categoriaProyecto;

        return $this;
    }

    /**
     * Get categoriaProyecto
     *
     * @return \CidesBundle\Entity\categoriaProyecto
     */
    public function getCategoriaProyecto()
    {
        return $this->categoriaProyecto;
    }

    /**
     * Set temaProyecto
     *
     * @param string $temaProyecto
     * @return Proyecto
     */
    public function setTemaProyecto($temaProyecto)
    {
        $this->temaProyecto = $temaProyecto;

        return $this;
    }

    /**
     * Get temaProyecto
     *
     * @return string 
     */
    public function getTemaProyecto()
    {
        return $this->temaProyecto;
    }
}

<?php

namespace CidesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="CidesBundle\Repository\UserRepository")
 */
class User
{
  // ...

  /**
    * One User has One asignacion.
    * @ORM\OneToOne(targetEntity="asignacion")
    */
  private $asignacion;
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
     * @ORM\Column(name="nombreCompleto", type="string", length=255)
     */
    private $nombreCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="cargoInstitucional", type="string", length=255)
     */
    private $cargoInstitucional;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="facultadPertenece", type="string", length=255, nullable=true)
     */
    private $facultadPertenece;

    /**
     * @var string
     *
     * @ORM\Column(name="idioma", type="string", length=255, nullable=true)
     */
    private $idioma;

    /**
     * @var string
     *
     * @ORM\Column(name="preparacionAcademica", type="string", length=255, nullable=true)
     */
    private $preparacionAcademica;

    /**
     * @var string
     *
     * @ORM\Column(name="capacitacion", type="string", length=255, nullable=true)
     */
    private $capacitacion;

    /**
     * @var string
     *
     * @ORM\Column(name="ponencia", type="string", length=255, nullable=true)
     */
    private $ponencia;

    /**
     * @var string
     *
     * @ORM\Column(name="publicacion", type="string", length=255, nullable=true)
     */
    private $publicacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_agree", type="boolean")
     */
    private $isAgree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="creat_at", type="datetime", nullable=true)
     */
    private $creatAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_at", type="datetime" ,nullable=true)
     */
    private $updateAt;


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
     * Set nombreCompleto
     *
     * @param string $nombreCompleto
     * @return User
     */
    public function setNombreCompleto($nombreCompleto)
    {
        $this->nombreCompleto = $nombreCompleto;

        return $this;
    }

    /**
     * Get nombreCompleto
     *
     * @return string
     */
    public function getNombreCompleto()
    {
        return $this->nombreCompleto;
    }

    /**
     * Set cargoInstitucional
     *
     * @param string $cargoInstitucional
     * @return User
     */
    public function setCargoInstitucional($cargoInstitucional)
    {
        $this->cargoInstitucional = $cargoInstitucional;

        return $this;
    }

    /**
     * Get cargoInstitucional
     *
     * @return string
     */
    public function getCargoInstitucional()
    {
        return $this->cargoInstitucional;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set facultadPertenece
     *
     * @param string $facultadPertenece
     * @return User
     */
    public function setFacultadPertenece($facultadPertenece)
    {
        $this->facultadPertenece = $facultadPertenece;

        return $this;
    }

    /**
     * Get facultadPertenece
     *
     * @return string
     */
    public function getFacultadPertenece()
    {
        return $this->facultadPertenece;
    }

    /**
     * Set idioma
     *
     * @param string $idioma
     * @return User
     */
    public function setIdioma($idioma)
    {
        $this->idioma = $idioma;

        return $this;
    }

    /**
     * Get idioma
     *
     * @return string
     */
    public function getIdioma()
    {
        return $this->idioma;
    }

    /**
     * Set preparacionAcademica
     *
     * @param string $preparacionAcademica
     * @return User
     */
    public function setPreparacionAcademica($preparacionAcademica)
    {
        $this->preparacionAcademica = $preparacionAcademica;

        return $this;
    }

    /**
     * Get preparacionAcademica
     *
     * @return string
     */
    public function getPreparacionAcademica()
    {
        return $this->preparacionAcademica;
    }

    /**
     * Set capacitacion
     *
     * @param string $capacitacion
     * @return User
     */
    public function setCapacitacion($capacitacion)
    {
        $this->capacitacion = $capacitacion;

        return $this;
    }

    /**
     * Get capacitacion
     *
     * @return string
     */
    public function getCapacitacion()
    {
        return $this->capacitacion;
    }

    /**
     * Set ponencia
     *
     * @param string $ponencia
     * @return User
     */
    public function setPonencia($ponencia)
    {
        $this->ponencia = $ponencia;

        return $this;
    }

    /**
     * Get ponencia
     *
     * @return string
     */
    public function getPonencia()
    {
        return $this->ponencia;
    }

    /**
     * Set publicacion
     *
     * @param string $publicacion
     * @return User
     */
    public function setPublicacion($publicacion)
    {
        $this->publicacion = $publicacion;

        return $this;
    }

    /**
     * Get publicacion
     *
     * @return string
     */
    public function getPublicacion()
    {
        return $this->publicacion;
    }

    /**
     * Set isAgree
     *
     * @param boolean $isAgree
     * @return User
     */
    public function setIsAgree($isAgree)
    {
        $this->isAgree = $isAgree;

        return $this;
    }

    /**
     * Get isAgree
     *
     * @return boolean
     */
    public function getIsAgree()
    {
        return $this->isAgree;
    }

    /**
     * Set creatAt
     *
     * @param \DateTime $creatAt
     * @return User
     */
    public function setCreatAt($creatAt)
    {
        $this->creatAt = $creatAt;

        return $this;
    }

    /**
     * Get creatAt
     *
     * @return \DateTime
     */
    public function getCreatAt()
    {
        return $this->creatAt;
    }

    /**
     * Set updateAt
     *
     * @param \DateTime $updateAt
     * @return User
     */
    public function setUpdateAt($updateAt)
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    /**
     * Get updateAt
     *
     * @return \DateTime
     */
    public function getUpdateAt()
    {
        return $this->updateAt;
    }

    /**
     * Set asignacion
     *
     * @param \CidesBundle\Entity\asignacion $asignacion
     * @return User
     */
    public function setAsignacion(\CidesBundle\Entity\asignacion $asignacion = null)
    {
        $this->asignacion = $asignacion;

        return $this;
    }

    /**
     * Get asignacion
     *
     * @return \CidesBundle\Entity\asignacion 
     */
    public function getAsignacion()
    {
        return $this->asignacion;
    }
}

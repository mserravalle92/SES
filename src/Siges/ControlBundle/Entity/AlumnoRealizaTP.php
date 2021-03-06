<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnoRealizaTP
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlumnoRealizaTP
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_alumno", type="integer")
     */
    private $idAlumno;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tp", type="integer")
     */
    private $idTp;

    /**
     * @var integer
     *
     * @ORM\Column(name="nota", type="integer")
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="string", length=255)
     */
    private $observaciones;


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
     * Set idAlumno
     *
     * @param integer $idAlumno
     * @return AlumnoRealizaTP
     */
    public function setIdAlumno($idAlumno)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    /**
     * Get idAlumno
     *
     * @return integer 
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set idTp
     *
     * @param integer $idTp
     * @return AlumnoRealizaTP
     */
    public function setIdTp($idTp)
    {
        $this->idTp = $idTp;

        return $this;
    }

    /**
     * Get idTp
     *
     * @return integer 
     */
    public function getIdTp()
    {
        return $this->idTp;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     * @return AlumnoRealizaTP
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return integer 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return AlumnoRealizaTP
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}

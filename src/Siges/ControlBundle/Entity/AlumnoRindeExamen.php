<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnoRindeExamen
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlumnoRindeExamen
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
     * @ORM\Column(name="id_examen", type="integer")
     */
    private $idExamen;

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
     * @return AlumnoRindeExamen
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
     * Set idExamen
     *
     * @param integer $idExamen
     * @return AlumnoRindeExamen
     */
    public function setIdExamen($idExamen)
    {
        $this->idExamen = $idExamen;

        return $this;
    }

    /**
     * Get idExamen
     *
     * @return integer 
     */
    public function getIdExamen()
    {
        return $this->idExamen;
    }

    /**
     * Set nota
     *
     * @param integer $nota
     * @return AlumnoRindeExamen
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
     * @return AlumnoRindeExamen
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

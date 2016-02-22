<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencia
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Asistencia
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
     * @ORM\Column(name="asistencias", type="integer")
     */
    private $asistencias;

    /**
     * @var integer
     *
     * @ORM\Column(name="inasistencias", type="integer")
     */
    private $inasistencias;

    /**
     * @var integer
     *
     * @ORM\Column(name="justificadas", type="integer")
     */
    private $justificadas;


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
     * @return Asistencia
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
     * Set asistencias
     *
     * @param integer $asistencias
     * @return Asistencia
     */
    public function setAsistencias($asistencias)
    {
        $this->asistencias = $asistencias;

        return $this;
    }

    /**
     * Get asistencias
     *
     * @return integer 
     */
    public function getAsistencias()
    {
        return $this->asistencias;
    }

    /**
     * Set inasistencias
     *
     * @param integer $inasistencias
     * @return Asistencia
     */
    public function setInasistencias($inasistencias)
    {
        $this->inasistencias = $inasistencias;

        return $this;
    }

    /**
     * Get inasistencias
     *
     * @return integer 
     */
    public function getInasistencias()
    {
        return $this->inasistencias;
    }

    /**
     * Set justificadas
     *
     * @param integer $justificadas
     * @return Asistencia
     */
    public function setJustificadas($justificadas)
    {
        $this->justificadas = $justificadas;

        return $this;
    }

    /**
     * Get justificadas
     *
     * @return integer 
     */
    public function getJustificadas()
    {
        return $this->justificadas;
    }
}

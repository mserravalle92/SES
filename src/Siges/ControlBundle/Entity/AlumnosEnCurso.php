<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnosEnCurso
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlumnosEnCurso
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
     * @ORM\Column(name="id_curso", type="integer")
     */
    private $idCurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_alumno", type="integer")
     */
    private $idAlumno;


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
     * Set idCurso
     *
     * @param integer $idCurso
     * @return AlumnosEnCurso
     */
    public function setIdCurso($idCurso)
    {
        $this->idCurso = $idCurso;

        return $this;
    }

    /**
     * Get idCurso
     *
     * @return integer 
     */
    public function getIdCurso()
    {
        return $this->idCurso;
    }

    /**
     * Set idAlumno
     *
     * @param integer $idAlumno
     * @return AlumnosEnCurso
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
}

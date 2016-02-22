<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * clase
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class clase
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
     * @ORM\Column(name="idMateria", type="integer")
     */
    private $idMateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCurso", type="integer")
     */
    private $idCurso;

    /**
     * @var integer
     *
     * @ORM\Column(name="idHorario", type="integer")
     */
    private $idHorario;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProfesor", type="integer")
     */
    private $idProfesor;


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
     * Set idMateria
     *
     * @param integer $idMateria
     *
     * @return clase
     */
    public function setIdMateria($idMateria)
    {
        $this->idMateria = $idMateria;

        return $this;
    }

    /**
     * Get idMateria
     *
     * @return integer
     */
    public function getIdMateria()
    {
        return $this->idMateria;
    }

    /**
     * Set idCurso
     *
     * @param integer $idCurso
     *
     * @return clase
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
     * Set idHorario
     *
     * @param integer $idHorario
     *
     * @return clase
     */
    public function setIdHorario($idHorario)
    {
        $this->idHorario = $idHorario;

        return $this;
    }

    /**
     * Get idHorario
     *
     * @return integer
     */
    public function getIdHorario()
    {
        return $this->idHorario;
    }

    /**
     * Set idProfesor
     *
     * @param integer $idProfesor
     *
     * @return clase
     */
    public function setIdProfesor($idProfesor)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Get idProfesor
     *
     * @return integer
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }
}


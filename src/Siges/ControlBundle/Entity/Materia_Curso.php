<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Materia_Curso
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Materia_Curso
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
     * @ORM\Column(name="id_materia", type="integer")
     */
    private $idMateria;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_curso", type="integer")
     */
    private $idCurso;


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
     * @return Materia_Curso
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
     * @return Materia_Curso
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
}


<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlumnoCursaMateria
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class AlumnoCursaMateria
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
     * @ORM\Column(name="id_materia", type="integer")
     */
    private $idMateria;


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
     * @return AlumnoCursaMateria
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
     * Set idMateria
     *
     * @param integer $idMateria
     * @return AlumnoCursaMateria
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
}

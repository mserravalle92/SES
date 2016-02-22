<?php

namespace Siges\ControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MateriaDiaHora
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class MateriaDiaHora
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
     * @ORM\Column(name="id_dia", type="integer")
     */
    private $idDia;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_horario", type="integer")
     */
    private $idHorario;


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
     * @return MateriaDiaHora
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
     * Set idDia
     *
     * @param integer $idDia
     * @return MateriaDiaHora
     */
    public function setIdDia($idDia)
    {
        $this->idDia = $idDia;

        return $this;
    }

    /**
     * Get idDia
     *
     * @return integer 
     */
    public function getIdDia()
    {
        return $this->idDia;
    }

    /**
     * Set idHorario
     *
     * @param integer $idHorario
     * @return MateriaDiaHora
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
}

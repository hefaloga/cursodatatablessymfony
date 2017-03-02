<?php

/**
 * Auto generated by MySQL Workbench Schema Exporter.
 * Version 3.0.3 (doctrine2-annotation) on 2017-03-02 14:51:13.
 * Goto https://github.com/johmue/mysql-workbench-schema-exporter for more
 * information.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * AppBundle\Entity\Disponibilidad
 *
 * @ORM\Entity(repositoryClass="DisponibilidadRepository")
 * @ORM\Table(name="disponibilidad")
 */
class Disponibilidad
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $fecha;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    protected $hora;

    /**
     * @ORM\OneToMany(targetEntity="Agenda", mappedBy="disponibilidad")
     * @ORM\JoinColumn(name="id", referencedColumnName="disponibilidad_id", nullable=false)
     */
    protected $agendas;

    public function __construct()
    {
        $this->agendas = new ArrayCollection();
    }

    /**
     * Set the value of id.
     *
     * @param integer $id
     * @return \AppBundle\Entity\Disponibilidad
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of fecha.
     *
     * @param \DateTime $fecha
     * @return \AppBundle\Entity\Disponibilidad
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get the value of fecha.
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set the value of hora.
     *
     * @param \DateTime $hora
     * @return \AppBundle\Entity\Disponibilidad
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get the value of hora.
     *
     * @return \DateTime
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * Add Agenda entity to collection (one to many).
     *
     * @param \AppBundle\Entity\Agenda $agenda
     * @return \AppBundle\Entity\Disponibilidad
     */
    public function addAgenda(Agenda $agenda)
    {
        $this->agendas[] = $agenda;

        return $this;
    }

    /**
     * Remove Agenda entity from collection (one to many).
     *
     * @param \AppBundle\Entity\Agenda $agenda
     * @return \AppBundle\Entity\Disponibilidad
     */
    public function removeAgenda(Agenda $agenda)
    {
        $this->agendas->removeElement($agenda);

        return $this;
    }

    /**
     * Get Agenda entity collection (one to many).
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAgendas()
    {
        return $this->agendas;
    }

    public function __sleep()
    {
        return array('id', 'fecha', 'hora');
    }
}

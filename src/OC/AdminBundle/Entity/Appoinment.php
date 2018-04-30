<?php

namespace OC\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Appoinment
 *
 * @ORM\Table(name="appoinment")
 * @ORM\Entity(repositoryClass="OC\AdminBundle\Repository\AppoinmentRepository")
 */
class Appoinment
{
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
     * @ORM\Column(name="patientName", type="string", length=255)
     */
    private $patientName;

    /**
     * @var string
     *
     * @ORM\Column(name="DoctorName", type="string", length=255)
     */
    private $doctorName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeAppoinment", type="time")
     */
    private $timeAppoinment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAppoinment", type="date")
     */
    private $dateAppoinment;

    public function __construct()
    {
        $this->timeAppoinment = new \Datetime();
        $this->dateAppoinment = new \Datetime();
    }
    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set patientName.
     *
     * @param string $patientName
     *
     * @return Appoinment
     */
    public function setPatientName($patientName)
    {
        $this->patientName = $patientName;

        return $this;
    }

    /**
     * Get patientName.
     *
     * @return string
     */
    public function getPatientName()
    {
        return $this->patientName;
    }

    /**
     * Set doctorName.
     *
     * @param string $doctorName
     *
     * @return Appoinment
     */
    public function setDoctorName($doctorName)
    {
        $this->doctorName = $doctorName;

        return $this;
    }

    /**
     * Get doctorName.
     *
     * @return string
     */
    public function getDoctorName()
    {
        return $this->doctorName;
    }

    /**
     * Set timeAppoinment.
     *
     * @param \DateTime $timeAppoinment
     *
     * @return Appoinment
     */
    public function setTimeAppoinment($timeAppoinment)
    {
        $this->timeAppoinment = $timeAppoinment;

        return $this;
    }

    /**
     * Get timeAppoinment.
     *
     * @return \DateTime
     */
    public function getTimeAppoinment()
    {
        return $this->timeAppoinment;
    }

    /**
     * Set dateAppoinment.
     *
     * @param \DateTime $dateAppoinment
     *
     * @return Appoinment
     */
    public function setDateAppoinment($dateAppoinment)
    {
        $this->dateAppoinment = $dateAppoinment;

        return $this;
    }

    /**
     * Get dateAppoinment.
     *
     * @return \DateTime
     */
    public function getDateAppoinment()
    {
        return $this->dateAppoinment;
    }
}

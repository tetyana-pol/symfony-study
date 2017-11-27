<?php

namespace SoftGroup\CompaniesBundle\Entity;
use SoftGroup\CompaniesBundle\Entity\Offices as Offices;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Persons
 *
 * @ORM\Table(name="persons")
 * @ORM\Entity(repositoryClass="SoftGroup\CompaniesBundle\Repository\PersonsRepository")
 */
class Persons
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
     * @var id_offices
     *
     * @ORM\Column(name="id_offices", type="integer")
     */
    private $idOffices;   

 /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="telefon", type="string", length=255, nullable=true)
     */
    private $telefon;

 /**
     * @ManyToOne(targetEntity="Offices")
     * @JoinColumn(name="id_offices", referencedColumnName="id")
     */
private $offices;
   
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Persons
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     * @return Persons
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * Set id_offices
     *
     * @param integer $idOffices
     * @return Persons
     */
    public function setIdOffices($idOffices)
    {
        $this->id_offices = $idOffices;

        return $this;
    }

    /**
     * Get id_offices
     *
     * @return integer 
     */
    public function getIdOffices()
    {
        return $this->idOffices;
    }

  }

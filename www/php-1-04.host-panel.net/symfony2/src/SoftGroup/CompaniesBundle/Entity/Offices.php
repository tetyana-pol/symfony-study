<?php

namespace SoftGroup\CompaniesBundle\Entity;
use SoftGroup\CompaniesBundle\Entity\Company;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Offices
 *
 * @ORM\Table(name="offices")
 * @ORM\Entity(repositoryClass="SoftGroup\CompaniesBundle\Repository\OfficesRepository")
 */
class Offices
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

 /**
    
     * @ManyToOne(targetEntity="Company", inversedBy="offices")
     * @JoinColumn(name="id_company", referencedColumnName="id")
     */
    private $company;

/**
      * @OneToMany(targetEntity="Persons", mappedBy="offices")
     */
  private $persons;

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
     * Set id_company
     *
     * @param integer $idCompany
     * @return Offices
     */
    public function setIdCompany($idCompany)
    {
        $this->id_company = $idCompany;

        return $this;
    }

    /**
     * Get id_company
     *
     * @return integer 
     */
    public function getIdCompany()
    {
        return $this->id_company;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Offices
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
     * Set address
     *
     * @param string $address
     * @return Offices
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set company
     *
     * @param \SoftGroup\CompaniesBundle\Entity\Company $company
     * @return Offices
     */
    public function setCompany(\SoftGroup\CompaniesBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \SoftGroup\CompaniesBundle\Entity\Company 
     */
    public function getCompany()
    {
        return $this->company;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persons = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add persons
     *
     * @param \SoftGroup\CompaniesBundle\Entity\Persons $persons
     * @return Offices
     */
    public function addPerson(\SoftGroup\CompaniesBundle\Entity\Persons $persons)
    {
        $this->persons[] = $persons;

        return $this;
    }

    /**
     * Remove persons
     *
     * @param \SoftGroup\CompaniesBundle\Entity\Persons $persons
     */
    public function removePerson(\SoftGroup\CompaniesBundle\Entity\Persons $persons)
    {
        $this->persons->removeElement($persons);
    }

    /**
     * Get persons
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPersons()
    {
        return $this->persons;
    }
}

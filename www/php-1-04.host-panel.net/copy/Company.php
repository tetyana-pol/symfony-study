<?php

namespace SoftGroup\CompaniesBundle\Entity;
use SoftGroup\CompaniesBundle\Entity\Category;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;
use \Doctrine\Common\Collections\ArrayCollection as ArrayCollection;

/**
 * Company
 *
 * @ORM\Table(name="company")
 * @ORM\Entity(repositoryClass="SoftGroup\CompaniesBundle\Repository\CompanyRepository")
 */
class Company
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
     * @ORM\OneToMany(targetEntity="Company", mappedBy="Offices")
     */
    private $offices;

/**
     * @ManyToOne(targetEntity="Category")
     * @JoinColumn(name="id_category", referencedColumnName="id")
     */
    private $category;

 public function __construct()
    {
        $this->offices = new ArrayCollection();
	
    }


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255, nullable=true)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

/**
     * @var int
     *
     * @ORM\Column(name="id_category", type="integer", nullable=true)
     */
    private $id_category;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="date", nullable=true)
     */
    private $updatedAt;

/**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="date", nullable=true)
     */
    private $createdAt;


    public function __toString()
    {
        return $this->name;
    }


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
     * Set name
     *
     * @param string $name
     * @return Company
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
     * Set adress
     *
     * @param string $adress
     * @return Company
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set site
     *
     * @param string $site
     * @return Company
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string 
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Company
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Company
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

       return $this; 
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Add offices
     *
     * @param \SoftGroup\CompaniesBundle\Entity\Company $offices
     * @return Company
     */
    public function addOffice(\SoftGroup\CompaniesBundle\Entity\Company $offices)
    {
        $this->offices[] = $offices;

        return $this;
    }

    /**
     * Remove offices
     *
     * @param \SoftGroup\CompaniesBundle\Entity\Company $offices
     */
    public function removeOffice(\SoftGroup\CompaniesBundle\Entity\Company $offices)
    {
        $this->offices->removeElement($offices);
    }

    /**
     * Get offices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOffices()
    {
        return $this->offices;
    }

    /**
     * Set id_category
     *
     * @param integer $idCategory
     * @return Company
     */
    public function setIdCategory($idCategory)
    {
        $this->id_category = $idCategory;

        return $this;
    }

    /**
     * Get id_category
     *
     * @return integer 
     */
    public function getIdCategory()
    {
        return $this->id_category;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Company
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    

    /**
     * Set category
     *
     * @param \SoftGroup\CompaniesBundle\Entity\Category $category
     * @return Company
     */
    public function setCategory(\SoftGroup\CompaniesBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \SoftGroup\CompaniesBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}

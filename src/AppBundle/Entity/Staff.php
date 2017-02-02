<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StaffRepository")
 */
class Staff
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
     * @ORM\Column(name="staffName", type="string", length=255)
     */
    private $staffName;

    /**
     * @var int
     *
     * @ORM\Column(name="empNumber", type="integer")
     */
    private $empNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="FTE", type="integer")
     */
    private $fTE;

    /**
     * @var string
     *
     * @ORM\Column(name="nameCode", type="string", length=255)
     */
    private $nameCode;

    /**
     * @var string
     *
     * @ORM\Column(name="position", type="string", length=255)
     */
    private $position;

    /**
     * @var int
     *
     * @ORM\Column(name="departmentCategory", type="integer")
     */
    private $departmentCategory;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set staffName
     *
     * @param string $staffName
     *
     * @return Staff
     */
    public function setStaffName($staffName)
    {
        $this->staffName = $staffName;

        return $this;
    }

    /**
     * Get staffName
     *
     * @return string
     */
    public function getStaffName()
    {
        return $this->staffName;
    }

    /**
     * Set empNumber
     *
     * @param integer $empNumber
     *
     * @return Staff
     */
    public function setEmpNumber($empNumber)
    {
        $this->empNumber = $empNumber;

        return $this;
    }

    /**
     * Get empNumber
     *
     * @return int
     */
    public function getEmpNumber()
    {
        return $this->empNumber;
    }

    /**
     * Set fTE
     *
     * @param integer $fTE
     *
     * @return Staff
     */
    public function setFTE($fTE)
    {
        $this->fTE = $fTE;

        return $this;
    }

    /**
     * Get fTE
     *
     * @return int
     */
    public function getFTE()
    {
        return $this->fTE;
    }

    /**
     * Set nameCode
     *
     * @param string $nameCode
     *
     * @return Staff
     */
    public function setNameCode($nameCode)
    {
        $this->nameCode = $nameCode;

        return $this;
    }

    /**
     * Get nameCode
     *
     * @return string
     */
    public function getNameCode()
    {
        return $this->nameCode;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Staff
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set departmentCategory
     *
     * @param integer $departmentCategory
     *
     * @return Staff
     */
    public function setDepartmentCategory($departmentCategory)
    {
        $this->departmentCategory = $departmentCategory;

        return $this;
    }

    /**
     * Get departmentCategory
     *
     * @return int
     */
    public function getDepartmentCategory()
    {
        return $this->departmentCategory;
    }
}


<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * workloadItem
 *
 * @ORM\Table(name="workload_item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\workloadItemRepository")
 */
class workloadItem
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
     * @var int
     *
     * @ORM\Column(name="Category", type="integer")
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="totalHrs", type="integer")
     */
    private $totalHrs;


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
     * Set name
     *
     * @param string $name
     *
     * @return workloadItem
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
     * Set category
     *
     * @param integer $category
     *
     * @return workloadItem
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set totalHrs
     *
     * @param integer $totalHrs
     *
     * @return workloadItem
     */
    public function setTotalHrs($totalHrs)
    {
        $this->totalHrs = $totalHrs;

        return $this;
    }

    /**
     * Get totalHrs
     *
     * @return int
     */
    public function getTotalHrs()
    {
        return $this->totalHrs;
    }
}


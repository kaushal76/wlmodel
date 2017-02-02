<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * staff4WLItem
 *
 * @ORM\Table(name="staff4_w_l_item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\staff4WLItemRepository")
 */
class staff4WLItem
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
     * @var int
     *
     * @ORM\Column(name="staffMember", type="integer")
     */
    private $staffMember;

    /**
     * @var int
     *
     * @ORM\Column(name="wlItem", type="integer")
     */
    private $wlItem;

    /**
     * @var int
     *
     * @ORM\Column(name="allocatedHrs", type="integer")
     */
    private $allocatedHrs;


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
     * Set staffMember
     *
     * @param integer $staffMember
     *
     * @return staff4WLItem
     */
    public function setStaffMember($staffMember)
    {
        $this->staffMember = $staffMember;

        return $this;
    }

    /**
     * Get staffMember
     *
     * @return int
     */
    public function getStaffMember()
    {
        return $this->staffMember;
    }

    /**
     * Set wlItem
     *
     * @param integer $wlItem
     *
     * @return staff4WLItem
     */
    public function setWlItem($wlItem)
    {
        $this->wlItem = $wlItem;

        return $this;
    }

    /**
     * Get wlItem
     *
     * @return int
     */
    public function getWlItem()
    {
        return $this->wlItem;
    }

    /**
     * Set allocatedHrs
     *
     * @param integer $allocatedHrs
     *
     * @return staff4WLItem
     */
    public function setAllocatedHrs($allocatedHrs)
    {
        $this->allocatedHrs = $allocatedHrs;

        return $this;
    }

    /**
     * Get allocatedHrs
     *
     * @return int
     */
    public function getAllocatedHrs()
    {
        return $this->allocatedHrs;
    }
}


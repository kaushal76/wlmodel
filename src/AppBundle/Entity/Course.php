<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\Column(name="courseCode", type="string", length=255)
     */
    private $courseCode;

    /**
     * @var string
     *
     * @ORM\Column(name="courseName", type="string", length=255)
     */
    private $courseName;

    /**
     * @var int
     *
     * @ORM\Column(name="courseLeader", type="integer")
     */
    private $courseLeader;

    /**
     * @var string
     *
     * @ORM\Column(name="courseLevel", type="string", length=255)
     */
    private $courseLevel;


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
     * Set courseCode
     *
     * @param string $courseCode
     *
     * @return Course
     */
    public function setCourseCode($courseCode)
    {
        $this->courseCode = $courseCode;

        return $this;
    }

    /**
     * Get courseCode
     *
     * @return string
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * Set courseName
     *
     * @param string $courseName
     *
     * @return Course
     */
    public function setCourseName($courseName)
    {
        $this->courseName = $courseName;

        return $this;
    }

    /**
     * Get courseName
     *
     * @return string
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Set courseLeader
     *
     * @param integer $courseLeader
     *
     * @return Course
     */
    public function setCourseLeader($courseLeader)
    {
        $this->courseLeader = $courseLeader;

        return $this;
    }

    /**
     * Get courseLeader
     *
     * @return int
     */
    public function getCourseLeader()
    {
        return $this->courseLeader;
    }

    /**
     * Set courseLevel
     *
     * @param string $courseLevel
     *
     * @return Course
     */
    public function setCourseLevel($courseLevel)
    {
        $this->courseLevel = $courseLevel;

        return $this;
    }

    /**
     * Get courseLevel
     *
     * @return string
     */
    public function getCourseLevel()
    {
        return $this->courseLevel;
    }
}


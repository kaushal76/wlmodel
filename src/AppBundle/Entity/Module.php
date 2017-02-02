<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Module
 *
 * @ORM\Table(name="module")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ModuleRepository")
 */
class Module
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
     * @ORM\Column(name="moduleCode", type="string", length=255)
     */
    private $moduleCode;

    /**
     * @var string
     *
     * @ORM\Column(name="moduleName", type="string", length=255)
     */
    private $moduleName;

    /**
     * @var int
     *
     * @ORM\Column(name="moduleLeader", type="integer")
     */
    private $moduleLeader;

    /**
     * @var int
     *
     * @ORM\Column(name="internalModerator", type="integer", nullable=true)
     */
    private $internalModerator;

    /**
     * @var int
     *
     * @ORM\Column(name="course", type="integer")
     */
    private $course;

    /**
     * @var int
     *
     * @ORM\Column(name="term", type="integer")
     */
    private $term;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255)
     */
    private $year;

    /**
     * @var int
     *
     * @ORM\Column(name="credits", type="integer")
     */
    private $credits;

    /**
     * @var int
     *
     * @ORM\Column(name="studentNos", type="integer")
     */
    private $studentNos;

    /**
     * @var int
     *
     * @ORM\Column(name="groupFtr", type="integer")
     */
    private $groupFtr;

    /**
     * @var int
     *
     * @ORM\Column(name="moduleType", type="integer")
     */
    private $moduleType;

    /**
     * @var int
     *
     * @ORM\Column(name="assessmentType", type="integer")
     */
    private $assessmentType;

    /**
     * @var int
     *
     * @ORM\Column(name="preperationType", type="integer")
     */
    private $preperationType;

    /**
     * @var int
     *
     * @ORM\Column(name="preserationHrs", type="integer")
     */
    private $preserationHrs;

    /**
     * @var int
     *
     * @ORM\Column(name="assessmentHrs", type="integer")
     */
    private $assessmentHrs;

    /**
     * @var int
     *
     * @ORM\Column(name="contactHrs", type="integer")
     */
    private $contactHrs;

    /**
     * @var int
     *
     * @ORM\Column(name="studioRatio", type="integer")
     */
    private $studioRatio;

    /**
     * @var int
     *
     * @ORM\Column(name="theoryRatio", type="integer")
     */
    private $theoryRatio;


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
     * Set moduleCode
     *
     * @param string $moduleCode
     *
     * @return Module
     */
    public function setModuleCode($moduleCode)
    {
        $this->moduleCode = $moduleCode;

        return $this;
    }

    /**
     * Get moduleCode
     *
     * @return string
     */
    public function getModuleCode()
    {
        return $this->moduleCode;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     *
     * @return Module
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set moduleLeader
     *
     * @param integer $moduleLeader
     *
     * @return Module
     */
    public function setModuleLeader($moduleLeader)
    {
        $this->moduleLeader = $moduleLeader;

        return $this;
    }

    /**
     * Get moduleLeader
     *
     * @return int
     */
    public function getModuleLeader()
    {
        return $this->moduleLeader;
    }

    /**
     * Set internalModerator
     *
     * @param integer $internalModerator
     *
     * @return Module
     */
    public function setInternalModerator($internalModerator)
    {
        $this->internalModerator = $internalModerator;

        return $this;
    }

    /**
     * Get internalModerator
     *
     * @return int
     */
    public function getInternalModerator()
    {
        return $this->internalModerator;
    }

    /**
     * Set course
     *
     * @param integer $course
     *
     * @return Module
     */
    public function setCourse($course)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return int
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Set term
     *
     * @param integer $term
     *
     * @return Module
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set year
     *
     * @param string $year
     *
     * @return Module
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return string
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set credits
     *
     * @param integer $credits
     *
     * @return Module
     */
    public function setCredits($credits)
    {
        $this->credits = $credits;

        return $this;
    }

    /**
     * Get credits
     *
     * @return int
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Set studentNos
     *
     * @param integer $studentNos
     *
     * @return Module
     */
    public function setStudentNos($studentNos)
    {
        $this->studentNos = $studentNos;

        return $this;
    }

    /**
     * Get studentNos
     *
     * @return int
     */
    public function getStudentNos()
    {
        return $this->studentNos;
    }

    /**
     * Set groupFtr
     *
     * @param integer $groupFtr
     *
     * @return Module
     */
    public function setGroupFtr($groupFtr)
    {
        $this->groupFtr = $groupFtr;

        return $this;
    }

    /**
     * Get groupFtr
     *
     * @return int
     */
    public function getGroupFtr()
    {
        return $this->groupFtr;
    }

    /**
     * Set moduleType
     *
     * @param integer $moduleType
     *
     * @return Module
     */
    public function setModuleType($moduleType)
    {
        $this->moduleType = $moduleType;

        return $this;
    }

    /**
     * Get moduleType
     *
     * @return int
     */
    public function getModuleType()
    {
        return $this->moduleType;
    }

    /**
     * Set assessmentType
     *
     * @param integer $assessmentType
     *
     * @return Module
     */
    public function setAssessmentType($assessmentType)
    {
        $this->assessmentType = $assessmentType;

        return $this;
    }

    /**
     * Get assessmentType
     *
     * @return int
     */
    public function getAssessmentType()
    {
        return $this->assessmentType;
    }

    /**
     * Set preperationType
     *
     * @param integer $preperationType
     *
     * @return Module
     */
    public function setPreperationType($preperationType)
    {
        $this->preperationType = $preperationType;

        return $this;
    }

    /**
     * Get preperationType
     *
     * @return int
     */
    public function getPreperationType()
    {
        return $this->preperationType;
    }

    /**
     * Set preserationHrs
     *
     * @param integer $preserationHrs
     *
     * @return Module
     */
    public function setPreserationHrs($preserationHrs)
    {
        $this->preserationHrs = $preserationHrs;

        return $this;
    }

    /**
     * Get preserationHrs
     *
     * @return int
     */
    public function getPreserationHrs()
    {
        return $this->preserationHrs;
    }

    /**
     * Set assessmentHrs
     *
     * @param integer $assessmentHrs
     *
     * @return Module
     */
    public function setAssessmentHrs($assessmentHrs)
    {
        $this->assessmentHrs = $assessmentHrs;

        return $this;
    }

    /**
     * Get assessmentHrs
     *
     * @return int
     */
    public function getAssessmentHrs()
    {
        return $this->assessmentHrs;
    }

    /**
     * Set contactHrs
     *
     * @param integer $contactHrs
     *
     * @return Module
     */
    public function setContactHrs($contactHrs)
    {
        $this->contactHrs = $contactHrs;

        return $this;
    }

    /**
     * Get contactHrs
     *
     * @return int
     */
    public function getContactHrs()
    {
        return $this->contactHrs;
    }

    /**
     * Set studioRatio
     *
     * @param integer $studioRatio
     *
     * @return Module
     */
    public function setStudioRatio($studioRatio)
    {
        $this->studioRatio = $studioRatio;

        return $this;
    }

    /**
     * Get studioRatio
     *
     * @return int
     */
    public function getStudioRatio()
    {
        return $this->studioRatio;
    }

    /**
     * Set theoryRatio
     *
     * @param integer $theoryRatio
     *
     * @return Module
     */
    public function setTheoryRatio($theoryRatio)
    {
        $this->theoryRatio = $theoryRatio;

        return $this;
    }

    /**
     * Get theoryRatio
     *
     * @return int
     */
    public function getTheoryRatio()
    {
        return $this->theoryRatio;
    }
}


<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="summoners")
*/
class Summoners
{
/**
* @ORM\Column(type="integer")
* @ORM\Id
*/
private $id;

/**
* @ORM\Column(type="string", length=100)
*/
private $name;

/**
* @ORM\Column(type="integer")
*/
private $profileIconId;

/**
* @ORM\Column(type="integer")
*/
private $summonerLevel;

/**
* @ORM\Column(type="integer")
*/
private $revisionDate;

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Summoners
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     *
     * @return Summoners
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
     * Set profileIconId
     *
     * @param integer $profileIconId
     *
     * @return Summoners
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;

        return $this;
    }

    /**
     * Get profileIconId
     *
     * @return integer
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * Set summonerLevel
     *
     * @param integer $summonerLevel
     *
     * @return Summoners
     */
    public function setSummonerLevel($summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;

        return $this;
    }

    /**
     * Get summonerLevel
     *
     * @return integer
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }

    /**
     * Set revisionDate
     *
     * @param integer $revisionDate
     *
     * @return Summoners
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;

        return $this;
    }

    /**
     * Get revisionDate
     *
     * @return integer
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }
}

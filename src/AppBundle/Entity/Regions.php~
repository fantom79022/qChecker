<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="regions")
*/
class Regions
{
/**
 * @ORM\Column(type="integer")
 * @ORM\GeneratedValue(strategy="AUTO")
 * @ORM\Id
*/
private $id;

/**
 * @ORM\Column(type="string", length=100)
*/
private $region;

    const SERVER_RU = 'ru';
    const SERVER_BR = 'br';
    const SERVER_EUNE = 'eune';
    const SERVER_EUW = 'euw';
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
     * Set region
     *
     * @param string $region
     *
     * @return Regions
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }
}

<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CentreInteret
 *
 * @ORM\Table(name="centre_interet")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\CentreInteretRepository")
 */
class CentreInteret
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
     * @ORM\Column(name="interet", type="string", length=255)
     */
    private $interet;


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
     * Set interet
     *
     * @param string $interet
     *
     * @return CentreInteret
     */
    public function setInteret($interet)
    {
        $this->interet = $interet;

        return $this;
    }

    /**
     * Get interet
     *
     * @return string
     */
    public function getInteret()
    {
        return $this->interet;
    }
}


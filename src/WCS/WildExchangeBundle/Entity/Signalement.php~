<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Signalement
 *
 * @ORM\Table(name="signalement")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\SignalementRepository")
 */
class Signalement
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
     * @var bool
     *
     * @ORM\Column(name="visibilité", type="boolean")
     */
    private $visibilité;

    /**
     * @var int
     *
     * @ORM\Column(name="nbSignalement", type="integer")
     */
    private $nbSignalement;


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
     * Set visibilité
     *
     * @param boolean $visibilité
     *
     * @return Signalement
     */
    public function setVisibilité($visibilité)
    {
        $this->visibilité = $visibilité;

        return $this;
    }

    /**
     * Get visibilité
     *
     * @return bool
     */
    public function getVisibilité()
    {
        return $this->visibilité;
    }

    /**
     * Set nbSignalement
     *
     * @param integer $nbSignalement
     *
     * @return Signalement
     */
    public function setNbSignalement($nbSignalement)
    {
        $this->nbSignalement = $nbSignalement;

        return $this;
    }

    /**
     * Get nbSignalement
     *
     * @return int
     */
    public function getNbSignalement()
    {
        return $this->nbSignalement;
    }
}


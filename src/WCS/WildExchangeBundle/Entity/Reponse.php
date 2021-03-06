<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="text", type="text", length=60000)
     */
    private $text;

    /**
     * @var int
     *
     * @ORM\Column(name="nbLike", type="integer")
     */
    private $nbLike;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;


//  Constructeur pour initialiser la date de la question
    public function __construct ()
{
    $this->dateCreation = new \DateTime();
    $this->nbLike = 0;

}




    /**
    *@ORM\ManyToOne(targetEntity="User", inversedBy="reponses")
    */
    private $user;

     /**
    *@ORM\ManyToOne(targetEntity="Question", inversedBy="reponses")
    */
    private $question;

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
     * Set text
     *
     * @param string $text
     *
     * @return Reponse
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set nbLike
     *
     * @param integer $nbLike
     *
     * @return Reponse
     */
    public function setNbLike($nbLike)
    {
        $this->nbLike = $nbLike;

        return $this;
    }

    /**
     * Get nbLike
     *
     * @return int
     */
    public function getNbLike()
    {
        return $this->nbLike;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Reponse
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set user
     *
     * @param \WCS\WildExchangeBundle\Entity\User $user
     *
     * @return Reponse
     */
    public function setUser(\WCS\WildExchangeBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \WCS\WildExchangeBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set question
     *
     * @param \WCS\WildExchangeBundle\Entity\Question $question
     *
     * @return Reponse
     */
    public function setQuestion(\WCS\WildExchangeBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \WCS\WildExchangeBundle\Entity\Question
     */
    public function getQuestion()
    {
        return $this->question;
    }
}

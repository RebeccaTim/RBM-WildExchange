<?php

namespace WCS\WildExchangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="WCS\WildExchangeBundle\Repository\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateQuestion", type="datetime")
     */
    private $dateQuestion;

    /**
     * @var int
     *
     * @ORM\Column(name="nbConsultation", type="integer")
     */
    private $nbConsultation;
    
    /**
     * @var text
     *
     * @ORM\Column(name="contenu", type="text", length=60000)
     */

    private $contenu;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=255)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="followers", type="string", length=255)
     */
    private $followers;
//    private $followers=0;  serait juste aussi si pas de construct !!!!!!!



//  Constructeur pour initialiser la date de la question
    public function __construct ()
{
    $this->dateQuestion = new \DateTime();
    $this->nbConsultation = 0;
    $this->statut = 0;
    $this->followers = 0;


}

    /**
    *@ORM\ManyToOne(targetEntity="User", inversedBy="questions")
    */
    private $user;


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
     * Set titre
     *
     * @param string $titre
     *
     * @return Question
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set dateQuestion
     *
     * @param \DateTime $dateQuestion
     *
     * @return Question
     */
    public function setDateQuestion($dateQuestion)
    {
        $this->dateQuestion = $dateQuestion;

        return $this;
    }

    /**
     * Get dateQuestion
     *
     * @return \DateTime
     */
    public function getDateQuestion()
    {
        return $this->dateQuestion;
    }

    /**
     * Set nbConsultation
     *
     * @param integer $nbConsultation
     *
     * @return Question
     */
    public function setNbConsultation($nbConsultation)
    {
        $this->nbConsultation = $nbConsultation;

        return $this;
    }

    /**
     * Get nbConsultation
     *
     * @return int
     */
    public function getNbConsultation()
    {
        return $this->nbConsultation;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Question
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Question
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set followers
     *
     * @param string $followers
     *
     * @return Question
     */
    public function setFollowers($followers)
    {
        $this->followers = $followers;

        return $this;
    }

    /**
     * Get followers
     *
     * @return string
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * Set user
     *
     * @param \WCS\WildExchangeBundle\Entity\User $user
     *
     * @return Question
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
}

<?php

namespace EcocolocsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 */
class Annonce
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $titre;

    /**
     * @var string
     */
    private $description;


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
     * Set nom
     *
     * @param string $titre
     * @return $this
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Annonce
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @var string
     */
    private $autheur;

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Set autheur
     *
     * @param string $autheur
     *
     * @return Annonce
     */
    public function setAutheur($autheur)
    {
        $this->autheur = $autheur;

        return $this;
    }

    /**
     * Get autheur
     *
     * @return string
     */
    public function getAutheur()
    {
        return $this->autheur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Annonce
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

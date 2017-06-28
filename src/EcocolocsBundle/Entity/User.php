<?php

namespace EcocolocsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var array
     */
    private $motdePasse;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    private $coloc;

    /**
     * @return string
     */
    public function getColoc()
    {
        return $this->coloc;
    }

    /**
     * @param string $coloc
     */
    public function setColoc($coloc)
    {
        $this->coloc = $coloc;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return array
     */
    public function getMotdePasse()
    {
        return $this->motdePasse;
    }

    /**
     * @param array $motdePasse
     */
    public function setMotdePasse($motdePasse)
    {
        $this->motdePasse = $motdePasse;
    }


}
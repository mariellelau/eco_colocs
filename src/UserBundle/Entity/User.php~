<?php

namespace UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


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
     * @var \EcocolocsBundle\Entity\Colocation
     */
    private $colocation;


    /**
     * Set colocation
     *
     * @param \EcocolocsBundle\Entity\Colocation $colocation
     *
     * @return User
     */
    public function setColocation(\EcocolocsBundle\Entity\Colocation $colocation = null)
    {
        $this->colocation = $colocation;

        return $this;
    }

    /**
     * Get colocation
     *
     * @return \EcocolocsBundle\Entity\Colocation
     */
    public function getColocation()
    {
        return $this->colocation;
    }
}

<?php

namespace EcocolocsBundle\Entity;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Colocation
 * @Vich\Uploadable
 */
class Colocation
{
    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $photo;

    /**
     * @Vich\UploadableField(mapping="colocs_logo", fileNameProperty="photo")
     * @var File
     */
    private $photoFichier;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $date;

    // ...

    public function setPhotoFichier(File $photo = null)
    {
        $this->photoFichier = $photo;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($photo) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->date = new \DateTime('now');
        }
    }

    public function getPhotoFichier()
    {
        return $this->photoFichier;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }



    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $habitant;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $page;


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
     * @param string $nom
     *
     * @return Colocation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Colocation
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
     * Set habitant
     *
     * @param string $habitant
     *
     * @return Colocation
     */
    public function setHabitant($habitant)
    {
        $this->habitant = $habitant;

        return $this;
    }

    /**
     * Get habitant
     *
     * @return string
     */
    public function getHabitant()
    {
        return $this->habitant;
    }

    /**
     * Set action
     *
     * @param string $action
     *
     * @return Colocation
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set page
     *
     * @param string $page
     *
     * @return Colocation
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return string
     */
    public function getPage()
    {
        return $this->page;
    }
}

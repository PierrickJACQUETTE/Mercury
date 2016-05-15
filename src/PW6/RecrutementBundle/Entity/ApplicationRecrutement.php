<?php

namespace PW6\RecrutementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApplicationRecrutement
 *
 * @ORM\Table(name="applicationRecrutement")
 * @ORM\Entity(repositoryClass="PW6\RecrutementBundle\Repository\ApplicationRecrutementRepository")
 */
class ApplicationRecrutement
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
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="PW6\RecrutementBundle\Entity\Recrutement")
     * @ORM\JoinColumn(nullable=false)
     */
    public $advert;

    /**
     * @ORM\Column(type="string")
     *
     * @Assert\NotBlank(message="Please, upload the product brochure as a PDF file.")
     * @Assert\File(mimeTypes={ "application/pdf" })
     */
    private $brochure;

    /**
     * @ORM\Column(name="valid", type="boolean")
     */
    private $valid = false;

    public function __construct(){
        $this->date = new \Datetime();
    }

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
     * Set author
     *
     * @param string $author
     *
     * @return ApplicationRecrutement
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ApplicationRecrutement
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

    /**
     * Set advert
     *
     * @param \PW6\RecrutementBundle\Entity\Recrutement $advert
     *
     * @return ApplicationRecrutement
     */
    public function setAdvert(\PW6\RecrutementBundle\Entity\Formation $advert)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \PW6\RecrutementBundle\Entity\Recrutement
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set brochure
     *
     * @param \PW6\RecrutementBundle\Entity\Recrutement $brochure
     *
     * @return ApplicationRecrutement
     */
    public function setBrochure($brochure)
    {
        $this->brochure = $brochure;

        return $this;
    }

    /**
     * Get brochure
     *
     * @return string
     */
    public function getBrochure()
    {
        return $this->brochure;
    }


    /**
     * Set valid
     *
     * @param boolean $valid
     *
     * @return ApplicationRecrutement
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return boolean
     */
    public function getValid()
    {
        return $this->valid;
    }
}

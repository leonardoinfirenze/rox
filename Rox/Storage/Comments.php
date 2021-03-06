<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments", indexes={@ORM\Index(name="IdToMember", columns={"IdToMember"}), @ORM\Index(name="comments_ibfk_1", columns={"IdFromMember"})})
 * @ORM\Entity
 */
class Comments
{
    /**
     * @var string
     *
     * @ORM\Column(name="Lenght", type="string", nullable=false)
     */
    private $lenght;

    /**
     * @var string
     *
     * @ORM\Column(name="Quality", type="string", nullable=false)
     */
    private $quality = 'Neutral';

    /**
     * @var string
     *
     * @ORM\Column(name="TextFree", type="text", length=65535, nullable=false)
     */
    private $textfree;

    /**
     * @var string
     *
     * @ORM\Column(name="TextWhere", type="text", length=65535, nullable=false)
     */
    private $textwhere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=true)
     */
    private $updated;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="AdminAction", type="string", nullable=false)
     */
    private $adminaction = 'NothingNeeded';

    /**
     * @var string
     *
     * @ORM\Column(name="DisplayableInCommentOfTheMonth", type="string", nullable=false)
     */
    private $displayableincommentofthemonth = 'Yes';

    /**
     * @var boolean
     *
     * @ORM\Column(name="DisplayInPublic", type="boolean", nullable=false)
     */
    private $displayinpublic = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="AllowEdit", type="boolean", nullable=false)
     */
    private $allowedit = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Members
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdToMember", referencedColumnName="id")
     * })
     */
    private $idtomember;

    /**
     * @var \AppBundle\Entity\Members
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Members")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="IdFromMember", referencedColumnName="id")
     * })
     */
    private $idfrommember;



    /**
     * Set lenght
     *
     * @param string $lenght
     *
     * @return Comments
     */
    public function setLenght($lenght)
    {
        $this->lenght = $lenght;

        return $this;
    }

    /**
     * Get lenght
     *
     * @return string
     */
    public function getLenght()
    {
        return $this->lenght;
    }

    /**
     * Set quality
     *
     * @param string $quality
     *
     * @return Comments
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set textfree
     *
     * @param string $textfree
     *
     * @return Comments
     */
    public function setTextfree($textfree)
    {
        $this->textfree = $textfree;

        return $this;
    }

    /**
     * Get textfree
     *
     * @return string
     */
    public function getTextfree()
    {
        return $this->textfree;
    }

    /**
     * Set textwhere
     *
     * @param string $textwhere
     *
     * @return Comments
     */
    public function setTextwhere($textwhere)
    {
        $this->textwhere = $textwhere;

        return $this;
    }

    /**
     * Get textwhere
     *
     * @return string
     */
    public function getTextwhere()
    {
        return $this->textwhere;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Comments
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Comments
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set adminaction
     *
     * @param string $adminaction
     *
     * @return Comments
     */
    public function setAdminaction($adminaction)
    {
        $this->adminaction = $adminaction;

        return $this;
    }

    /**
     * Get adminaction
     *
     * @return string
     */
    public function getAdminaction()
    {
        return $this->adminaction;
    }

    /**
     * Set displayableincommentofthemonth
     *
     * @param string $displayableincommentofthemonth
     *
     * @return Comments
     */
    public function setDisplayableincommentofthemonth($displayableincommentofthemonth)
    {
        $this->displayableincommentofthemonth = $displayableincommentofthemonth;

        return $this;
    }

    /**
     * Get displayableincommentofthemonth
     *
     * @return string
     */
    public function getDisplayableincommentofthemonth()
    {
        return $this->displayableincommentofthemonth;
    }

    /**
     * Set displayinpublic
     *
     * @param boolean $displayinpublic
     *
     * @return Comments
     */
    public function setDisplayinpublic($displayinpublic)
    {
        $this->displayinpublic = $displayinpublic;

        return $this;
    }

    /**
     * Get displayinpublic
     *
     * @return boolean
     */
    public function getDisplayinpublic()
    {
        return $this->displayinpublic;
    }

    /**
     * Set allowedit
     *
     * @param boolean $allowedit
     *
     * @return Comments
     */
    public function setAllowedit($allowedit)
    {
        $this->allowedit = $allowedit;

        return $this;
    }

    /**
     * Get allowedit
     *
     * @return boolean
     */
    public function getAllowedit()
    {
        return $this->allowedit;
    }

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
     * Set idtomember
     *
     * @param \AppBundle\Entity\Members $idtomember
     *
     * @return Comments
     */
    public function setIdtomember(\AppBundle\Entity\Members $idtomember = null)
    {
        $this->idtomember = $idtomember;

        return $this;
    }

    /**
     * Get idtomember
     *
     * @return \AppBundle\Entity\Members
     */
    public function getIdtomember()
    {
        return $this->idtomember;
    }

    /**
     * Set idfrommember
     *
     * @param \AppBundle\Entity\Members $idfrommember
     *
     * @return Comments
     */
    public function setIdfrommember(\AppBundle\Entity\Members $idfrommember = null)
    {
        $this->idfrommember = $idfrommember;

        return $this;
    }

    /**
     * Get idfrommember
     *
     * @return \AppBundle\Entity\Members
     */
    public function getIdfrommember()
    {
        return $this->idfrommember;
    }
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geonames
 *
 * @ORM\Table(name="geonames", indexes={@ORM\Index(name="idx_name", columns={"name"}), @ORM\Index(name="idx_latitude", columns={"latitude"}), @ORM\Index(name="idx_longitude", columns={"longitude"}), @ORM\Index(name="idx_fclass", columns={"fclass"}), @ORM\Index(name="idx_fcode", columns={"fcode"}), @ORM\Index(name="idx_country", columns={"country"}), @ORM\Index(name="idx_admin1", columns={"admin1"})})
 * @ORM\Entity
 */
class Geonames
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="latitude", type="decimal", precision=10, scale=7, nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="longitude", type="decimal", precision=10, scale=7, nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="fclass", type="string", length=1, nullable=true)
     */
    private $fclass;

    /**
     * @var string
     *
     * @ORM\Column(name="fcode", type="string", length=10, nullable=true)
     */
    private $fcode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="admin1", type="string", length=20, nullable=true)
     */
    private $admin1;

    /**
     * @var integer
     *
     * @ORM\Column(name="population", type="integer", nullable=true)
     */
    private $population;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="moddate", type="date", nullable=true)
     */
    private $moddate;

    /**
     * @var integer
     *
     * @ORM\Column(name="geonameid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $geonameid;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Geonames
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set latitude
     *
     * @param string $latitude
     *
     * @return Geonames
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param string $longitude
     *
     * @return Geonames
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set fclass
     *
     * @param string $fclass
     *
     * @return Geonames
     */
    public function setFclass($fclass)
    {
        $this->fclass = $fclass;

        return $this;
    }

    /**
     * Get fclass
     *
     * @return string
     */
    public function getFclass()
    {
        return $this->fclass;
    }

    /**
     * Set fcode
     *
     * @param string $fcode
     *
     * @return Geonames
     */
    public function setFcode($fcode)
    {
        $this->fcode = $fcode;

        return $this;
    }

    /**
     * Get fcode
     *
     * @return string
     */
    public function getFcode()
    {
        return $this->fcode;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Geonames
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set admin1
     *
     * @param string $admin1
     *
     * @return Geonames
     */
    public function setAdmin1($admin1)
    {
        $this->admin1 = $admin1;

        return $this;
    }

    /**
     * Get admin1
     *
     * @return string
     */
    public function getAdmin1()
    {
        return $this->admin1;
    }

    /**
     * Set population
     *
     * @param integer $population
     *
     * @return Geonames
     */
    public function setPopulation($population)
    {
        $this->population = $population;

        return $this;
    }

    /**
     * Get population
     *
     * @return integer
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * Set moddate
     *
     * @param \DateTime $moddate
     *
     * @return Geonames
     */
    public function setModdate($moddate)
    {
        $this->moddate = $moddate;

        return $this;
    }

    /**
     * Get moddate
     *
     * @return \DateTime
     */
    public function getModdate()
    {
        return $this->moddate;
    }

    /**
     * Get geonameid
     *
     * @return integer
     */
    public function getGeonameid()
    {
        return $this->geonameid;
    }
}

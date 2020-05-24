<?php
declare(strict_types=1);

namespace Core\Entity\Concat;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends \Core\Entity\Country
{
    /**
     * @ORM\ManyToMany(targetEntity="Core\Entity\City")
     * @ORM\JoinTable(name="cities_countries",
     *     joinColumns={@ORM\JoinColumn(name="country_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="city_id", referencedColumnName="id", unique=true)}
     * )
     */
    protected ArrayCollection $cities;
    /**
     * @ORM\ManyToMany(targetEntity="Core\Entity\Region")
     * @ORM\JoinTable(name="cities_countries",
     *     joinColumns={@ORM\JoinColumn(name="country_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="region_id", referencedColumnName="id", unique=true)}
     * )
     */
    protected ArrayCollection $regions;

    public function __construct()
    {
        $this->cities = new ArrayCollection();
        $this->regions = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getCities(): ArrayCollection
    {
        return $this->cities;
    }

    /**
     * @param ArrayCollection $cities
     * @return Country
     */
    public function setCities(ArrayCollection $cities): Country
    {
        $this->cities = $cities;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getRegions(): ArrayCollection
    {
        return $this->regions;
    }

    /**
     * @param ArrayCollection $regions
     * @return Country
     */
    public function setRegions(ArrayCollection $regions): Country
    {
        $this->regions = $regions;
        return $this;
    }
}
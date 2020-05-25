<?php
declare(strict_types=1);

namespace Core\Entity\Concat;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="region")
 */
class Region extends \Core\Entity\Region
{
    /**
     * @ORM\ManyToOne(targetEntity="Core\Entity\Concat\Country", inversedBy="regions")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected Country $country;
    /**
     * @ORM\OneToMany(targetEntity="Core\Entity\Concat\City", mappedBy="region", fetch="LAZY", cascade={"ALL"})
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    protected Collection $cities;

    public function __construct()
    {
        $this->cities = new ArrayCollection();
    }

    /**
     * @return Collection
     */
    public function getCities()
    {
        return $this->cities;
    }

    /**
     * @param Collection $cities
     * @return Region
     */
    public function setCities(Collection $cities)
    {
        $this->cities = $cities;
        return $this;
    }

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return Region
     */
    public function setCountry(Country $country): Region
    {
        $this->country = $country;
        return $this;
    }
}
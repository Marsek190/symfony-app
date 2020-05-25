<?php
declare(strict_types=1);

namespace Core\Entity\Concat;


use Core\Entity\Country;
use Core\Entity\Region;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City extends \Core\Entity\City
{
    /**
     * @ORM\ManyToOne(targetEntity="Core\Entity\Concat\Country", inversedBy="cities")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected Country $country;
    /**
     * @ORM\ManyToOne(targetEntity="Core\Entity\Concat\Region", inversedBy="cities")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    protected Region $region;

    /**
     * @return Country
     */
    public function getCountry(): Country
    {
        return $this->country;
    }

    /**
     * @param Country $country
     * @return City
     */
    public function setCountry(Country $country): City
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return Region
     */
    public function getRegion(): Region
    {
        return $this->region;
    }

    /**
     * @param Region $region
     * @return City
     */
    public function setRegion(Region $region): City
    {
        $this->region = $region;
        return $this;
    }
}
<?php
declare(strict_types=1);

namespace Front\Entity;

use Doctrine\ORM\Mapping as ORM;
use Front\Collection\ArrayList;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends \Core\Entity\Simplify\Country
{
    /**
     * @ORM\Column(name="geo_x", type="float")
     */
    protected float $geoX;
    /**
     * @ORM\Column(name="geo_y", type="float")
     */
    protected float $geoY;

    protected ArrayList $cities;

    protected ArrayList $regions;

    /**
     * @return float
     */
    public function getGeoX(): float
    {
        return $this->geoX;
    }

    /**
     * @param float $geoX
     * @return Country
     */
    public function setGeoX(float $geoX): Country
    {
        $this->geoX = $geoX;
        return $this;
    }

    /**
     * @return float
     */
    public function getGeoY(): float
    {
        return $this->geoY;
    }

    /**
     * @param float $geoY
     * @return Country
     */
    public function setGeoY(float $geoY): Country
    {
        $this->geoY = $geoY;
        return $this;
    }

    /**
     * @return ArrayList
     */
    public function getCities(): ArrayList
    {
        return $this->cities;
    }

    /**
     * @param ArrayList $cities
     * @return Country
     */
    public function setCities(ArrayList $cities): Country
    {
        $this->cities = $cities;
        return $this;
    }

    /**
     * @return ArrayList
     */
    public function getRegions(): ArrayList
    {
        return $this->regions;
    }

    /**
     * @param ArrayList $regions
     * @return Country
     */
    public function setRegions(ArrayList $regions): Country
    {
        $this->regions = $regions;
        return $this;
    }
}
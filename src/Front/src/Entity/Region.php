<?php
declare(strict_types=1);

namespace Front\Entity;


use Doctrine\ORM\Mapping as ORM;
use Front\Collection\ArrayList;

/**
 * @ORM\Entity
 * @ORM\Table(name="region")
 */
class Region extends \Core\Entity\Simplify\Region
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

    /**
     * @return float
     */
    public function getGeoX(): float
    {
        return $this->geoX;
    }

    /**
     * @param float $geoX
     * @return Region
     */
    public function setGeoX(float $geoX): Region
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
     * @return Region
     */
    public function setGeoY(float $geoY): Region
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
     * @return Region
     */
    public function setCities(ArrayList $cities): Region
    {
        $this->cities = $cities;
        return $this;
    }
}
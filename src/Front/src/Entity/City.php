<?php
declare(strict_types=1);

namespace Front\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City extends \Core\Entity\Simplify\City
{
    /**
     * @ORM\Column(name="geo_x", type="float")
     */
    protected float $geoX;
    /**
     * @ORM\Column(name="geo_y", type="float")
     */
    protected float $geoY;
    /**
     * @ORM\Column(type="string")
     */
    protected string $established;

    protected array $datetimeFields = ['established'];

    /**
     * @return float
     */
    public function getGeoX(): float
    {
        return $this->geoX;
    }

    /**
     * @param float $geoX
     * @return City
     */
    public function setGeoX(float $geoX): City
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
     * @return City
     */
    public function setGeoY(float $geoY): City
    {
        $this->geoY = $geoY;
        return $this;
    }

    /**
     * @return string
     */
    public function getEstablished(): string
    {
        return $this->established;
    }

    /**
     * @param string $established
     * @return City
     */
    public function setEstablished(string $established): City
    {
        $this->established = $established;
        return $this;
    }
}
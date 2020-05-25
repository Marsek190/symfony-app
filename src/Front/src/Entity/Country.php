<?php
declare(strict_types=1);

namespace Front\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends \Core\Entity\Simplify\Country
{
    /**
     * @ORM\Column(type="float")
     */
    protected float $geo_x;
    /**
     * @ORM\Column(type="float")
     */
    protected float $geo_y;
    /**
     * @ORM\Column(type="string")
     */
    protected string $city_title;
    /**
     * @ORM\Column(type="string")
     */
    protected string $region_title;
    /**
     * @ORM\Column(type="integer")
     */
    protected int $city_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected int $region_id;

    /**
     * @return float
     */
    public function getGeoX(): float
    {
        return $this->geo_x;
    }

    /**
     * @param float $geo_x
     * @return Country
     */
    public function setGeoX(float $geo_x): Country
    {
        $this->geo_x = $geo_x;
        return $this;
    }

    /**
     * @return float
     */
    public function getGeoY(): float
    {
        return $this->geo_y;
    }

    /**
     * @param float $geo_y
     * @return Country
     */
    public function setGeoY(float $geo_y): Country
    {
        $this->geo_y = $geo_y;
        return $this;
    }

    /**
     * @return string
     */
    public function getCityTitle(): string
    {
        return $this->city_title;
    }

    /**
     * @param string $city_title
     * @return Country
     */
    public function setCityTitle(string $city_title): Country
    {
        $this->city_title = $city_title;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegionTitle(): string
    {
        return $this->region_title;
    }

    /**
     * @param string $region_title
     * @return Country
     */
    public function setRegionTitle(string $region_title): Country
    {
        $this->region_title = $region_title;
        return $this;
    }

    /**
     * @return int
     */
    public function getCityId(): int
    {
        return $this->city_id;
    }

    /**
     * @param int $city_id
     * @return Country
     */
    public function setCityId(int $city_id): Country
    {
        $this->city_id = $city_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getRegionId(): int
    {
        return $this->region_id;
    }

    /**
     * @param int $region_id
     * @return Country
     */
    public function setRegionId(int $region_id): Country
    {
        $this->region_id = $region_id;
        return $this;
    }
}
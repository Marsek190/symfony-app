<?php
declare(strict_types=1);

namespace Core\Entity\Simplify;


use Doctrine\ORM\Mapping as ORM;
use Core\Entity\AbstractRootEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City extends AbstractRootEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected int $id;
    /**
     * @ORM\Column(type="integer")
     */
    protected int $country_id;
    /**
     * @ORM\Column(type="integer")
     */
    protected int $region_id;
    /**
     * @ORM\Column(type="string")
     */
    protected string $title;
    /**
     * @ORM\Column(type="float")
     */
    protected float $population;
    /**
     * @ORM\Column(type="float")
     */
    protected float $area;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Core\Entity\City
     */
    public function setId(int $id): City
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->country_id;
    }

    /**
     * @param int $country_id
     * @return City
     */
    public function setCountryId(int $country_id): City
    {
        $this->country_id = $country_id;
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
     * @return City
     */
    public function setRegionId(int $region_id): City
    {
        $this->region_id = $region_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return City
     */
    public function setTitle(string $title): City
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return float
     */
    public function getPopulation(): float
    {
        return $this->population;
    }

    /**
     * @param float $population
     * @return City
     */
    public function setPopulation(float $population): City
    {
        $this->population = $population;
        return $this;
    }

    /**
     * @return float
     */
    public function getArea(): float
    {
        return $this->area;
    }

    /**
     * @param float $area
     * @return City
     */
    public function setArea(float $area): City
    {
        $this->area = $area;
        return $this;
    }
}
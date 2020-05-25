<?php
declare(strict_types=1);

namespace Core\Entity\Simplify;


use Core\Entity\AbstractRootEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="region")
 */
class Region extends AbstractRootEntity
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
     * @ORM\Column(type="string")
     */
    protected string $capital;
    /**
     * @ORM\Column(type="string")
     */
    protected string $flag;
    /**
     * @ORM\Column(type="string")
     */
    protected string $largest_city;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return \Core\Entity\Region
     */
    public function setId(int $id): Region
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
     * @return Region
     */
    public function setCountryId(int $country_id): Region
    {
        $this->country_id = $country_id;
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
     * @return Region
     */
    public function setTitle(string $title): Region
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
     * @return Region
     */
    public function setPopulation(float $population): Region
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
     * @return Region
     */
    public function setArea(float $area): Region
    {
        $this->area = $area;
        return $this;
    }

    /**
     * @return string
     */
    public function getCapital(): string
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     * @return Region
     */
    public function setCapital(string $capital): Region
    {
        $this->capital = $capital;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlag(): string
    {
        return $this->flag;
    }

    /**
     * @param string $flag
     * @return Region
     */
    public function setFlag(string $flag): Region
    {
        $this->flag = $flag;
        return $this;
    }

    /**
     * @return string
     */
    public function getLargestCity(): string
    {
        return $this->largest_city;
    }

    /**
     * @param string $largest_city
     * @return Region
     */
    public function setLargestCity(string $largest_city): Region
    {
        $this->largest_city = $largest_city;
        return $this;
    }
}
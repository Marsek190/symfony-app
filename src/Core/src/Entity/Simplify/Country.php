<?php
declare(strict_types=1);

namespace Core\Entity\Simplify;


use Core\Entity\AbstractRootEntity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends AbstractRootEntity
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected int $id;
    /**
     * @ORM\Column(type="string")
     */
    protected string $title;
    /**
     * @ORM\Column(type="float")
     */
    protected float $population;
    /**
     * @ORM\Column(type="string")
     */
    protected string $capital;
    /**
     * @ORM\Column(type="string")
     */
    protected string $legislature;
    /**
     * @ORM\Column(type="string")
     */
    protected string $flag;
    /**
     * @ORM\Column(type="string")
     */
    protected string $largest_city;
    /**
     * @ORM\Column(type="string")
     */
    protected string $national_language;
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
     * @return \Core\Entity\Country
     */
    public function setId(int $id): Country
    {
        $this->id = $id;
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
     * @return Country
     */
    public function setTitle(string $title): Country
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
     * @return Country
     */
    public function setPopulation(float $population): Country
    {
        $this->population = $population;
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
     * @return Country
     */
    public function setCapital(string $capital): Country
    {
        $this->capital = $capital;
        return $this;
    }

    /**
     * @return string
     */
    public function getLegislature(): string
    {
        return $this->legislature;
    }

    /**
     * @param string $legislature
     * @return Country
     */
    public function setLegislature(string $legislature): Country
    {
        $this->legislature = $legislature;
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
     * @return Country
     */
    public function setFlag(string $flag): Country
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
     * @return Country
     */
    public function setLargestCity(string $largest_city): Country
    {
        $this->largest_city = $largest_city;
        return $this;
    }

    /**
     * @return string
     */
    public function getNationalLanguage(): string
    {
        return $this->national_language;
    }

    /**
     * @param string $national_language
     * @return Country
     */
    public function setNationalLanguage(string $national_language): Country
    {
        $this->national_language = $national_language;
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
     * @return Country
     */
    public function setArea(float $area): Country
    {
        $this->area = $area;
        return $this;
    }
}
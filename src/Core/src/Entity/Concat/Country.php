<?php
declare(strict_types=1);

namespace Core\Entity\Concat;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends \Core\Entity\Country
{
    /**
     * @ORM\OneToMany(targetEntity="Core\Entity\Concat\City", mappedBy="country", fetch="LAZY", cascade={"ALL"})
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected Collection $cities;
    /**
     * @ORM\OneToMany(targetEntity="Core\Entity\Concat\Region", mappedBy="country", fetch="LAZY", cascade={"ALL"})
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected Collection $regions;

    public function __construct()
    {
        $this->cities = new ArrayCollection();
        $this->regions = new ArrayCollection();
    }

    /**
     * @return ArrayCollection
     */
    public function getCities(): Collection
    {
        return $this->cities;
    }

    /**
     * @param Collection $cities
     * @return Country
     */
    public function setCities(Collection $cities): Country
    {
        $this->cities = $cities;
        return $this;
    }

    /**
     * @return Collection
     */
    public function getRegions(): Collection
    {
        return $this->regions;
    }

    /**
     * @param Collection $regions
     * @return Country
     */
    public function setRegions(Collection $regions): Country
    {
        $this->regions = $regions;
        return $this;
    }
}
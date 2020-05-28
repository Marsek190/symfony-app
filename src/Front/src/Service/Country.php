<?php
declare(strict_types=1);

namespace Front\Service;


use Front\Repository\Region;

class Country
{
    protected \Front\Repository\Country $country;

    protected \Front\Repository\City $city;

    protected Region $region;

    public function __construct(
        \Front\Repository\Country $country,
        \Front\Repository\City $city,
        Region $region)
    {
        $this->country = $country;
        $this->city = $city;
        $this->region = $region;
    }

    public function getById(int $id): ?\Front\Entity\Country
    {
        /**
         * @var \Front\Entity\Country $country
         */
        $country = $this->country->getById($id);
        $cities = $this->city->getAllByCountryId($id);
        $regions = $this->region->getAllByCountryId($id);

        return $country->setCities($cities)->setRegions($regions);
    }
}
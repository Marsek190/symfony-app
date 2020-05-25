<?php
declare(strict_types=1);

namespace Front\Service;


class City
{
    protected \Front\Repository\City $city;

    public function __construct(\Front\Repository\City $city)
    {
        $this->city = $city;
    }

    public function getById(int $id): ?\Core\Entity\Concat\City
    {
        /**
         * @var \Core\Entity\Concat\City $city
         */
        $city = $this->city->getById($id);
        var_dump($city->getCountry()); die();

        return $city;
    }
}
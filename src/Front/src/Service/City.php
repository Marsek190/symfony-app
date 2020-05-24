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

    public function getById(int $id): \Core\Entity\City
    {
        return $this->city->getById($id);
    }
}
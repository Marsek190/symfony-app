<?php
declare(strict_types=1);

namespace Front\Service;


class Country
{
    protected \Front\Repository\Country $country;

    public function __construct(\Front\Repository\Country $country)
    {
        $this->country = $country;
    }

    public function getById(int $id): ?\Core\Entity\Country
    {
        return $this->country->getById($id);
    }
}
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

    public function getById(int $id): ?\Front\Entity\Country
    {
        /**
         * @var \Front\Entity\Country $country
         */
        $country = $this->country->getById($id);
        var_dump($country); die();

        return $country;
    }
}
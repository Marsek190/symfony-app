<?php
declare(strict_types=1);

namespace Core\Entity\Concat;


use Core\Entity\Country;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City extends \Core\Entity\City
{
    /**
     * @ORM\ManyToOne(targetEntity="Core\Entity\Country")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id")
     */
    protected Country $region;
}
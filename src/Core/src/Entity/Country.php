<?php
declare(strict_types=1);

namespace Core\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="country")
 */
class Country extends \Core\Entity\Simplify\Country
{
    /**
     * @ORM\Column(type="point")
     */
    protected Coordinates $coordinates;

    /**
     * @return Coordinates
     */
    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }

    /**
     * @param Coordinates $coordinates
     * @return Country
     */
    public function setCoordinates(Coordinates $coordinates): Country
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}
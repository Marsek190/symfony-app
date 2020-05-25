<?php
declare(strict_types=1);

namespace Core\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="region")
 */
class Region extends \Core\Entity\Simplify\Region
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
     * @return Region
     */
    public function setCoordinates(Coordinates $coordinates): Region
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}
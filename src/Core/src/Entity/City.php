<?php
declare(strict_types=1);

namespace Core\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="city")
 */
class City extends \Core\Entity\Simplify\City
{
    /**
     * @ORM\Column(type="datetime")
     */
    protected \DateTime $established;
    /**
     * @ORM\Column(type="point")
     */
    protected Coordinates $coordinates;

    /**
     * @return \DateTime
     */
    public function getEstablished(): \DateTime
    {
        return $this->established;
    }

    /**
     * @param \DateTime $established
     * @return City
     */
    public function setEstablished(\DateTime $established): City
    {
        $this->established = $established;
        return $this;
    }

    /**
     * @return Coordinates
     */
    public function getCoordinates(): Coordinates
    {
        return $this->coordinates;
    }

    /**
     * @param Coordinates $coordinates
     * @return City
     */
    public function setCoordinates(Coordinates $coordinates): City
    {
        $this->coordinates = $coordinates;
        return $this;
    }
}
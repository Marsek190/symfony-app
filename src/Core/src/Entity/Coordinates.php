<?php
declare(strict_types=1);

namespace Core\Entity;


class Coordinates
{
    protected float $geo_s;

    protected float $geo_e;

    public function __construct(float $geo_s, float $geo_e)
    {
        $this->geo_e = $geo_e;
        $this->geo_s = $geo_s;
    }

    /**
     * @return float
     */
    public function getGeoS(): float
    {
        return $this->geo_s;
    }

    /**
     * @param float $geo_s
     * @return Coordinates
     */
    public function setGeoS(float $geo_s): Coordinates
    {
        $this->geo_s = $geo_s;
        return $this;
    }

    /**
     * @return float
     */
    public function getGeoE(): float
    {
        return $this->geo_e;
    }

    /**
     * @param float $geo_e
     * @return Coordinates
     */
    public function setGeoE(float $geo_e): Coordinates
    {
        $this->geo_e = $geo_e;
        return $this;
    }
}
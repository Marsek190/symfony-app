<?php
declare(strict_types=1);

namespace Front\Repository;


use Doctrine\DBAL\FetchMode;
use Front\Collection\ArrayList;

class Region extends \Core\Repository\Region
{

    public function getAllByCountryId(int $countryId): ArrayList
    {
        $qb = $this->connection->createQueryBuilder()
            ->select(
                'r.id',
                'r.title',
                'X(ct.coordinates) AS geo_x',
                'Y(ct.coordinates) AS geo_y',
                'r.area',
                'r.population'
            )
            ->from('region', 'r')
            ->andWhere('r.country_id = :country_id')
            ->setParameter('country_id', $countryId)
            ->addOrderBy('r.title');

        $stmt = $qb->execute();
        $stmt->setFetchMode(FetchMode::CUSTOM_OBJECT, $this->getObjectPrototype());

        $regions = $stmt->fetchAll();

        return new ArrayList($regions);
    }

    public function getObjectPrototype(): string
    {
        return \Front\Entity\Region::class;
    }
}
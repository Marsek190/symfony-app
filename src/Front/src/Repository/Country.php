<?php
declare(strict_types=1);

namespace Front\Repository;


use Core\Entity\AbstractRootEntity;
use Doctrine\DBAL\FetchMode;

class Country extends \Core\Repository\Country
{
    public function getById(int $id): ?AbstractRootEntity
    {
        $qb = $this->connection->createQueryBuilder()
            ->select(
                'ct.id',
                'ct.title',
                'ct.largest_city',
                'X(ct.coordinates) AS geo_x',
                'Y(ct.coordinates) AS geo_y',
                'ct.area',
                'ct.population'
            )
            ->from('country', 'ct')
            ->andWhere('ct.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('ct.title');

        $stmt = $qb->execute();
        $stmt->setFetchMode(FetchMode::CUSTOM_OBJECT, $this->getObjectPrototype());

        return $stmt->fetch();
    }

    public function getObjectPrototype(): string
    {
        return \Front\Entity\Country::class;
    }
}
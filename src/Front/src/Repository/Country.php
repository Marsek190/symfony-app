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
                'ct.population',
                'c.title AS city_title',
                'r.title AS region_title',
                'c.id AS city_id',
                'r.id AS region_id'
            )
            ->from('country', 'ct')
            ->innerJoin('ct', 'city', 'c', 'c.country_id = ct.id')
            ->innerJoin('ct', 'region', 'r', 'r.country_id = ct.id')
            ->andWhere('ct.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('ct.title');

        $stmt = $qb->execute();
        $stmt->setFetchMode(FetchMode::CUSTOM_OBJECT, \Front\Entity\Country::class);
        var_dump($stmt->fetchAll()); die();
        return $stmt->fetch();
    }

    public function getObjectPrototype(): string
    {
        return \Core\Entity\Concat\Country::class;
    }
}
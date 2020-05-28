<?php
declare(strict_types=1);

namespace Front\Repository;


use Core\Entity\AbstractRootEntity;
use Core\Repository\AbstractRepository;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\FetchMode;
use Doctrine\ORM\EntityManager;
use Front\Collection\ArrayList;

class City extends AbstractRepository
{
    public function __construct(Connection $connection, EntityManager $em)
    {
        parent::__construct($connection, $em);
    }

    public function getById(int $id): ?AbstractRootEntity
    {
        $qb = $this->repository->createQueryBuilder('c')
            ->select('c', 'region', 'country')
            ->innerJoin('c.region', 'region')
            ->innerJoin('c.country', 'country')
            ->andWhere('c.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('c.title');

        $query = $qb->getQuery();

        $sql = $query->getSQL() /** Get raw sql */;

        return $query->getResult();
    }

    public function getAllByCountryId(int $countryId): ArrayList
    {
        $qb = $this->connection->createQueryBuilder()
            ->select(
                'c.id',
                'c.title',
                'X(ct.coordinates) AS geo_x',
                'Y(ct.coordinates) AS geo_y',
                'c.area',
                'c.population',
                'c.established'
            )
            ->from('city', 'c')
            ->andWhere('c.country_id = :country_id')
            ->setParameter('country_id', $countryId)
            ->addOrderBy('c.title');

        $stmt = $qb->execute();
        $stmt->setFetchMode(FetchMode::CUSTOM_OBJECT, \Front\Entity\City::class);

        $cities = $stmt->fetchAll();

        return new ArrayList($cities);
    }

    public function getObjectPrototype(): string
    {
        return \Core\Entity\Concat\City::class;
    }
}
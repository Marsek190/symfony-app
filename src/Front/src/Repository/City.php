<?php
declare(strict_types=1);

namespace Front\Repository;


use Core\Entity\AbstractRootEntity;
use Core\Repository\AbstractRepository;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;

class City extends AbstractRepository
{
    public function __construct(Connection $connection, EntityManager $em)
    {
        parent::__construct($connection, $em);
    }

    public function getById(int $id): ?AbstractRootEntity
    {
        $qb = $this->em->createQueryBuilder()
            ->select('c', 'region', 'country')
            ->from($this->getObjectPrototype(), 'c')
            ->innerJoin('c.region', 'region')
            ->innerJoin('c.country', 'country')
            ->andWhere('c.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('c.title', 'ASC');

        try {
            $query = $qb->getQuery();
            //$query->setFetchMode(FetchMode::CUSTOM_OBJECT, $this->getObjectPrototype(), ClassMetadataInfo::FETCH_LAZY);
            return $query->getSingleResult();
        } catch (NoResultException $e) {

        } catch (NonUniqueResultException $e) {

        }
    }

    public function getObjectPrototype(): string
    {
        return \Core\Entity\Concat\City::class;
    }
}
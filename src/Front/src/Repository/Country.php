<?php
declare(strict_types=1);

namespace Front\Repository;


use Core\Entity\AbstractRootEntity;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;

class Country extends \Core\Repository\Country
{
    public function getById(int $id): ?AbstractRootEntity
    {
        $qb = $this->repository->createQueryBuilder('c')
            ->select('c', 'regions', 'cities')
            ->innerJoin('c.regions', 'regions')
            ->innerJoin('c.cities', 'cities')
            ->andWhere('c.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('c.title', 'ASC');

        $query = $qb->getQuery();
        try {
            return $query->getSingleResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
    }

    public function getObjectPrototype(): string
    {
        return \Core\Entity\Concat\Country::class;
    }
}
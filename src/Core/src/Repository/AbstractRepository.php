<?php
declare(strict_types=1);

namespace Core\Repository;


use Core\Entity\AbstractRootEntity;
use Core\Repository\BaseInterface\IGetObjectPrototype;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

abstract class AbstractRepository implements IGetObjectPrototype
{
    protected Connection $connection;

    protected EntityManager $em;

    protected EntityRepository $repository;

    public function __construct(Connection $connection, EntityManager $em)
    {
        $this->connection = $connection;
        $this->em = $em;
        $this->repository = $em->getRepository($this->getObjectPrototype());
    }

    public function getById(int $id): ?AbstractRootEntity
    {
        /**
         * @var AbstractRootEntity|null $entity
         */
        $entity = $this->repository->find($id);
        return $entity;
    }
}
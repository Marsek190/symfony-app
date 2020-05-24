<?php
declare(strict_types=1);

namespace Core\Repository;


use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class City
{
    protected Connection $connection;

    protected EntityManager $em;

    protected EntityRepository $repository;

    public function __construct(Connection $connection, EntityManager $em)
    {
        $this->connection = $connection;
        $this->em = $em;
        $this->repository = $em->getRepository(\Core\Entity\City::class);
    }

    public function getById(int $id): ?\Core\Entity\City
    {
        /**
         * @var \Core\Entity\City|null $city
         */
        $city = $this->repository->find($id);
        var_dump($city); die();
        return $city;
    }
}
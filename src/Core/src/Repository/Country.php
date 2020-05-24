<?php
declare(strict_types=1);

namespace Core\Repository;


use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class Country
{
    protected Connection $connection;

    protected EntityManager $em;

    protected EntityRepository $repository;

    public function __construct(Connection $connection, EntityManager $em)
    {
        $this->connection = $connection;
        $this->em = $em;
        $this->repository = $em->getRepository(\Core\Entity\Country::class);
    }

    public function getById(int $id): ?\Core\Entity\Country
    {
        /**
         * @var \Core\Entity\Country|null $city
         */
        $country = $this->repository->find($id);
        var_dump($country); die();
        return $country;
    }
}
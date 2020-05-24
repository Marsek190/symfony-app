<?php
declare(strict_types=1);

namespace Core\Repository;


use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;

class Region extends AbstractRepository
{
    public function __construct(Connection $connection, EntityManager $em)
    {
        parent::__construct($connection, $em);
    }

    public function getObjectPrototype(): string
    {
        return \Core\Entity\Region::class;
    }
}
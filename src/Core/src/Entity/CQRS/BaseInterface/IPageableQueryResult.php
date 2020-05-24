<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\BaseInterface;


use Doctrine\ORM\Tools\Pagination\Paginator;

interface IPageableQueryResult extends IStrategyQueryResult
{
    public function getResult(): Paginator;
}
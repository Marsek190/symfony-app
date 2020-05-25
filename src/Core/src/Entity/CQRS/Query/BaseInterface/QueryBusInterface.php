<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\Query\BaseInterface;


use Core\Entity\CQRS\BaseInterface\ICriterion;
use Core\Entity\CQRS\BaseInterface\IStrategyQueryResult;

interface QueryBusInterface
{
    public function execute(ICriterion $criteria): IStrategyQueryResult;
}
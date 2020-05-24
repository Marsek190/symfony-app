<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\BaseInterface;


interface IIterableQueryResult extends IStrategyQueryResult
{
    public function getResult(): iterable;
}
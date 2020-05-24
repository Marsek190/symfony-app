<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\BaseInterface;


use Core\Entity\AbstractRootEntity;

interface ISingleQueryResult extends IStrategyQueryResult
{
    public function getResult(): ?AbstractRootEntity;
}
<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\Query\Result;


use Core\Entity\AbstractRootEntity;
use Core\Entity\CQRS\BaseInterface\ISingleQueryResult;

final class SingleQueryResult implements ISingleQueryResult
{
    private AbstractRootEntity $entity;

    public function __construct(AbstractRootEntity $entity)
    {
        $this->entity = $entity;
    }

    public function getResult(): ?AbstractRootEntity
    {
        return $this->entity;
    }
}
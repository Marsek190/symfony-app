<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\Query;


use Core\Entity\CQRS\BaseInterface\ICriterion;

class GetCityId implements ICriterion
{
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
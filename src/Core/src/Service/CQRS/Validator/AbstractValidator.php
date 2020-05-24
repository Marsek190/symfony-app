<?php
declare(strict_types=1);

namespace Core\Service\CQRS\Validator;


use Core\Entity\CQRS\BaseInterface\ValidatorInterface;
use Core\Repository\AbstractRepository;

abstract class AbstractValidator implements ValidatorInterface
{
    protected AbstractRepository $repository;

    public function __construct(AbstractRepository $repository)
    {
        $this->repository = $repository;
    }
}
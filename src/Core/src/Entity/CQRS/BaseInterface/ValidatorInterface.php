<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\BaseInterface;


interface ValidatorInterface
{
    public function validate(CommandInterface $command): array;
}
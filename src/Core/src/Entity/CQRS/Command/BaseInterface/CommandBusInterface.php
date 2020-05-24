<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\Command\BaseInterface;


use Core\Entity\CQRS\BaseInterface\CommandInterface;
use Core\Exception\ValidationException;

interface CommandBusInterface
{
    /**
     * @param  CommandInterface $command
     * @return void
     * @throws ValidationException
     */
    public function execute(CommandInterface $command): void;
}
<?php
declare(strict_types=1);

namespace Core\Entity\CQRS\Command\BaseInterface;


use Core\Entity\CQRS\BaseInterface\CommandInterface;

interface HandlerInterface
{
    /**
     * @param CommandInterface $command
     */
    public function handle(CommandInterface $command): void;
}
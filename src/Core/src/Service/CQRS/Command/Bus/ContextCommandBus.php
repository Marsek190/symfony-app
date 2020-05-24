<?php
declare(strict_types=1);

namespace Core\Service\CQRS\Command\Bus;


use Core\Collection\Context;
use Core\Entity\CQRS\BaseInterface\CommandInterface;
use Core\Service\CQRS\Command\AbstractCommandBus;

final class ContextCommandBus extends AbstractCommandBus
{
    public function __construct(AbstractCommandBus $next)
    {
        parent::__construct($next);
        $this->context = new Context();
    }

    public function execute(CommandInterface $command): void
    {
        parent::execute($command);
    }
}
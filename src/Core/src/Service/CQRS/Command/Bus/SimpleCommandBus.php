<?php
declare(strict_types=1);

namespace Core\Service\CQRS\Command\Bus;


use Core\Entity\CQRS\BaseInterface\CommandInterface;
use Core\Entity\CQRS\Command\BaseInterface\HandlerInterface;
use Core\Service\CQRS\Command\AbstractCommandBus;

final class SimpleCommandBus extends AbstractCommandBus
{
    protected HandlerInterface $handler;

    public function __construct(HandlerInterface $handler)
    {
        parent::__construct();
        $this->handler = $handler;
    }

    public function execute(CommandInterface $command): void
    {
        $this->handler->handle($command);
    }
}
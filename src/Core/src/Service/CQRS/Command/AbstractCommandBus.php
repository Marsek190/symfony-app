<?php
declare(strict_types=1);

namespace Core\Service\CQRS\Command;


use Core\Collection\Context;
use Core\Entity\CQRS\BaseInterface\CommandInterface;
use Core\Entity\CQRS\Command\BaseInterface\CommandBusInterface;

abstract class AbstractCommandBus implements CommandBusInterface
{
    protected ?AbstractCommandBus $commandBus;

    protected Context $context;

    public function __construct(AbstractCommandBus $commandBus = null)
    {
        $this->commandBus = $commandBus;
    }

    /**
     * @param Context $context
     * @return $this
     */
    protected function setContext(Context $context): self
    {
        $this->context = $context;
        return $this;
    }

    /**
     * @param CommandInterface $command
     */
    public function execute(CommandInterface $command): void
    {
        if (! is_null($this->commandBus)) {
            $this->commandBus->setContext($this->context)->execute($command);
        }
    }
}
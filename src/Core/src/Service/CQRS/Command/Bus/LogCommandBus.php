<?php
declare(strict_types=1);

namespace Core\Service\CQRS\Command\Bus;


use Core\Entity\CQRS\BaseInterface\CommandInterface;
use Core\Service\CQRS\Command\AbstractCommandBus;
use Psr\Log\LoggerInterface;

final class LogCommandBus extends AbstractCommandBus
{
    protected LoggerInterface $logger;

    public function __construct(AbstractCommandBus $next, LoggerInterface $logger)
    {
        parent::__construct($next);
        $this->logger = $logger;
    }

    public function execute(CommandInterface $command): void
    {
        $this->logger->info('Executing of ' . get_class($command));
        $this->context->offsetSet(static::class, time());

        parent::execute($command);
    }
}
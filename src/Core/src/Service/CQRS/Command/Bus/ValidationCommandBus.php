<?php
declare(strict_types=1);

namespace Core\Service\CQRS\Command\Bus;


use Core\Entity\CQRS\BaseInterface\CommandInterface;
use Core\Exception\ValidationException;
use Core\Service\CQRS\Command\AbstractCommandBus;
use Core\Service\CQRS\Validator\AbstractValidator;

final class ValidationCommandBus extends AbstractCommandBus
{
    protected AbstractValidator $validator;

    public function __construct(AbstractCommandBus $next, AbstractValidator $validator)
    {
        parent::__construct($next);
        $this->validator = $validator;
    }

    /**
     * @param CommandInterface $command
     * @throws ValidationException
     */
    public function execute(CommandInterface $command): void
    {
        $errors = $this->validator->validate($command);
        if (! empty($errors)) {
            throw new ValidationException($errors);
        }

        parent::execute($command);
    }
}
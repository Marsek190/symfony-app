<?php
declare(strict_types=1);

namespace User\Entity\CQRS\Command;


use Core\Entity\CQRS\BaseInterface\CommandInterface;

class UserSignIn implements CommandInterface
{
    protected string $email;

    protected string $password;

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UserSignIn
     */
    public function setEmail(string $email): UserSignIn
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return UserSignIn
     */
    public function setPassword(string $password): UserSignIn
    {
        $this->password = $password;
        return $this;
    }
}
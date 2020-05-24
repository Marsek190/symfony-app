<?php
declare(strict_types=1);

namespace User\Entity\CQRS\Command;


use Core\Entity\CQRS\BaseInterface\CommandInterface;

class UserSignUp implements CommandInterface
{
    protected string $userName;

    protected string $passwordHash;

    protected string $email;

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     * @return UserSignUp
     */
    public function setUserName(string $userName): UserSignUp
    {
        $this->userName = $userName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPasswordHash(): string
    {
        return $this->passwordHash;
    }

    /**
     * @param string $passwordHash
     * @return UserSignUp
     */
    public function setPasswordHash(string $passwordHash): UserSignUp
    {
        $this->passwordHash = $passwordHash;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return UserSignUp
     */
    public function setEmail(string $email): UserSignUp
    {
        $this->email = $email;
        return $this;
    }
}
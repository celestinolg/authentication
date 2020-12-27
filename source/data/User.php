<?php

namespace Source\data;

class User
{
    private string $name;
    private string $email;
    private string $password;

    public function __construct(string $name, string $email, string $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_ARGON2I);
    }


    public function getUser(): array
    {
        return ["name" => $this->name, "email" => $this->email];
    }

    public function auth(string $email, string $password): bool
    {
        return (($this->email === $email) && (password_verify($password, $this->password)));
    }
}

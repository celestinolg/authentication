<?php

namespace  Source\domain;

use League\Plates\Engine;
use Source\data\User;

class Login
{

    private $view;
    private $user;
    public function __construct()
    {
        $this->user = new User("Celestino Langa", "celestinolanga11@gmail.com", "1234");
        $this->view = Engine::create(__DIR__ . "/../../theme", "php");
    }

    public function main(): void
    {
        if ($this->sessionVerify())
            header("location: " . url("home"));

        //$_SESSION["tokenLogin"] = date("H");
        echo $this->view->render("auth");
    }

    public function access(array $data): void
    {
        $authData = filter_var_array($data, FILTER_SANITIZE_STRING);
        if (empty($authData)) {
            header("location: " . url());
        }
        if (!$this->user->auth($authData["email"], $authData["password"])) {
            header("location: " . url());
        } else
            $_SESSION["email"] = $authData["email"];
            header("location: " . url("home"));
    }

    public function home()
    {
        if (!$this->sessionVerify())
            header("location: " . url());
        echo $this->view->render("home",["user" =>$this->user->getUser()]);
    }

    public function removeAccess()
    {
        session_destroy();
        header("location: " . url());
    }

    private function sessionVerify(): bool
    {
        return isset($_SESSION["email"]);
    }
}

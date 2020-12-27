<?php

use CoffeeCode\Router\Router;

require __DIR__ . "/vendor/autoload.php";

$router = new Router(BASE_URL);
$router->namespace("Source\domain");

$router->group(null);
$router->get("/","Login:main");
$router->get("/home","Login:home");
$router->post("/acesso","Login:access");
$router->get("/sair","Login:removeAccess");

$router->group("erro");
$router->get("/{errcode}", "App:error");

$router->dispatch();

if ($router->error()) {
	$router->redirect("/erro/{$router->error()}");
}
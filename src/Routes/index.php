<?php

use App\Controllers\HomeController;
use App\Controllers\ApiController;
use App\Router;

$router = new Router();

$router->get("/", HomeController::class, "index");
$router->get("/api/films", ApiController::class, 'fetchData');

$router->dispatch();

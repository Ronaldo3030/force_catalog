<?php

use App\Controllers\HomeController;
use App\Controllers\ApiController;
use App\Router;

$router = new Router();

$router->get("/", HomeController::class, "index");
$router->get("/movie", HomeController::class, "movie");

$router->get("/api/films", ApiController::class, 'fetchDataFilm');
$router->get("/api/films/{id}", ApiController::class, 'fetchDataIdFilm');

$router->get("/api/characters/{id}", ApiController::class, 'fetchDataIdCharacters');

$router->dispatch();

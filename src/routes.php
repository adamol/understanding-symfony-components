<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', [
    'name' => 'World',
    'greetingsRepository' => new GreetingsRepository,
    '_controller' => 'GreetingsController::helloAction',
]));
$routes->add('bye', new Routing\Route('/bye', [
    '_controller' => 'GreetingsController::byeAction',
]));

return $routes;